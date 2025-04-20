document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-learning-video");
    const container = document.getElementById("learning-video-container");

    searchInput.addEventListener("input", function () {
        const query = this.value.trim();
        if (query === "") return location.reload();

        fetch(`/api/learning-videos?search=${encodeURIComponent(query)}`, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((res) => res.json())
            .then((data) => {
                if (data.length === 0) {
                    container.innerHTML = `<p class="text-center text-gray-500">Tidak ditemukan.</p>`;
                    return;
                }

                container.innerHTML = `
                    ${data
                        .map(
                            (video) => `
                            <div>
                                <div class="mb-4">
                                    <iframe class="w-full h-64 rounded-md"
                                            src="https://www.youtube.com/embed/${extractYoutubeId(
                                                video.youtube_url
                                            )}"
                                            frameborder="0"
                                            allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="py-2 mt-2 text-center text-white rounded-md" style="background-color: #2D336B;">
                                    ${video.title}
                                </div>
                            </div>
                        `
                        )
                        .join("")}
            `;
            });
    });
});

function extractYoutubeId(url) {
    const regExp =
        /^.*(youtu\.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
    const match = url.match(regExp);
    return match && match[2].length === 11 ? match[2] : null;
}
