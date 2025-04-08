const videoInput = document.getElementById("search-video");
const videoContainer = document.getElementById("video-container");

function renderVideoGallery(galleries) {
    videoContainer.innerHTML = "";

    if (galleries.length === 0) {
        videoContainer.innerHTML =
            '<p class="col-span-3 text-center text-gray-500">Tidak ditemukan.</p>';
        return;
    }

    galleries.forEach((galery, index) => {
        const videoFiles = galery.files.filter((file) =>
            /\.(mp4)$/i.test(file)
        );
        const videoCover = videoFiles[0];

        if (!videoCover) return;

        const card = document.createElement("div");
        card.className =
            "relative overflow-hidden rounded-lg shadow-md cursor-pointer";
        card.onclick = () => {
            document
                .getElementById(`modal-video-${index}`)
                .classList.remove("hidden");
        };

        card.innerHTML = `
            <video src="/storage/${videoCover}" class="object-cover w-full h-40 rounded-lg"></video>
            <div class="absolute bottom-0 w-full bg-[#2D336B] text-white text-center py-2 font-semibold rounded-b-lg">
                ${galery.name}
            </div>
        `;

        videoContainer.appendChild(card);

        // Modal
        const modalWrapper = document.getElementById("modal-wrapper");
        const modal = document.createElement("div");
        modal.id = `modal-video-${index}`;
        modal.className =
            "fixed inset-0 z-50 flex items-center justify-center hidden overflow-y-auto bg-black bg-opacity-70";

        modal.innerHTML = `
            <div class="relative w-full max-w-4xl p-6 bg-white rounded-lg" onclick="event.stopPropagation()">
                <button class="absolute text-2xl font-bold text-gray-600 top-2 right-4 hover:text-red-600"
                    onclick="document.getElementById('modal-video-${index}').classList.add('hidden')">&times;</button>

                <h2 class="mb-4 text-xl font-semibold">${galery.name}</h2>
                <div class="grid grid-cols-1 gap-4 max-h-[70vh] overflow-y-auto">
                    ${videoFiles
                        .map(
                            (file) =>
                                `<video src="/storage/${file}" controls class="w-full rounded shadow"></video>`
                        )
                        .join("")}
                </div>
            </div>
        `;
        modal.onclick = () => {
            modal.classList.add("hidden");
        };
        modalWrapper.appendChild(modal);
    });
}

function fetchVideos(query = "") {
    if (!query.trim()) {
        window.location.reload();
        return;
    }
    fetch(`/api/galery/videos?search=${encodeURIComponent(query)}`)
        .then((res) => res.json())
        .then(renderVideoGallery)
        .catch((err) => console.error(err));
}

videoInput.addEventListener("input", function () {
    fetchVideos(this.value);
});
