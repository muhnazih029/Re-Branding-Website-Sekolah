document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-announcement");
    const container = document.getElementById("announcement-container");

    searchInput.addEventListener("input", function () {
        const query = this.value.trim();

        if (query === "") return location.reload();

        fetch(`/api/announcements?search=${encodeURIComponent(query)}`, {
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

                container.innerHTML = data
                    .map(
                        (announcement) => `
                <div class="flex flex-col gap-6 p-6 mb-10 transition bg-white rounded-lg shadow md:flex-row hover:shadow-lg">
                    <div class="w-full overflow-hidden bg-gray-300 rounded-lg h-100 md:w-1/3">
                        <img src="/storage/${announcement.image}" alt="${announcement.title}" class="object-cover w-full h-full" />
                    </div>
                    <div class="flex flex-col justify-between w-full md:w-2/3">
                        <div>
                            <h2 class="mb-2 text-xl font-semibold text-gray-800 md:text-2xl">${announcement.title}</h2>
                            <p class="mb-4 text-sm text-gray-600">
                                Oleh <strong>${announcement.author}</strong> • ${announcement.created_at}
                            </p>
                            <p class="text-sm text-gray-700">${announcement.content}</p>
                        </div>
                        <div class="mt-4">
                            <a href="/pengumuman/${announcement.type}/${announcement.slug}"
                                class="inline-block bg-[#2D336B] text-white px-4 py-2 rounded-md hover:bg-blue-800 transition text-sm">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            `
                    )
                    .join("");
            });
    });
});
