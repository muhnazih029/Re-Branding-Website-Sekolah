const searchInput = document.getElementById("search-photo");
const container = document.getElementById("photos-container");

function renderPhotoGallery(galleries) {
    container.innerHTML = "";

    if (galleries.length === 0) {
        container.innerHTML =
            '<p class="col-span-3 text-center text-gray-500">Tidak ditemukan.</p>';
        return;
    }

    galleries.forEach((galery, index) => {
        const imageFiles = galery.files.filter((file) =>
            /\.(jpg|jpeg|png|webp)$/i.test(file)
        );
        const cover = imageFiles[0];
        if (!cover) return;

        const card = document.createElement("div");
        card.className =
            "relative overflow-hidden rounded-lg shadow-md cursor-pointer";
        card.onclick = () => {
            document
                .getElementById(`modal-${index}`)
                .classList.remove("hidden");
        };

        card.innerHTML = `
            <img src="/storage/${cover}" alt="${galery.name}" class="object-cover w-full h-full" />
            <div class="absolute bottom-0 w-full bg-[#2D336B] text-white text-center py-2 font-semibold rounded-b-lg">
                ${galery.name}
            </div>
        `;

        container.appendChild(card);

        // Modal
        const modal = document.createElement("div");
        modal.id = `modal-${index}`;
        modal.className =
            "fixed inset-0 z-50 flex items-center justify-center hidden overflow-y-auto bg-black bg-opacity-70";

        modal.innerHTML = `
            <div class="relative w-full max-w-4xl p-6 bg-white rounded-lg" onclick="event.stopPropagation()">
                <button class="absolute text-2xl font-bold text-gray-600 top-2 right-4 hover:text-red-600"
                    onclick="document.getElementById('modal-${index}').classList.add('hidden')">&times;</button>
                <h2 class="mb-4 text-xl font-semibold">${galery.name}</h2>
                <div class="grid grid-cols-3 gap-4 max-h-[70vh] overflow-y-auto">
                    ${imageFiles
                        .map(
                            (file) =>
                                `<img src="/storage/${file}" alt="" class="w-full rounded shadow" />`
                        )
                        .join("")}
                </div>
            </div>
        `;

        modal.onclick = () => {
            modal.classList.add("hidden");
        };

        container.appendChild(modal);
    });
}

function fetchGallery(query = "") {
    if (!query.trim()) {
        window.location.reload();
        return;
    }
    fetch(`/api/galery/photos?search=${encodeURIComponent(query)}`)
        .then((res) => res.json())
        .then(renderPhotoGallery)
        .catch((err) => console.error(err));
}

searchInput.addEventListener("input", function () {
    fetchGallery(this.value);
});
