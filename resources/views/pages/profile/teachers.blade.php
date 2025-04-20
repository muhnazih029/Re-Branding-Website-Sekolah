<x-layouts>
    <x-layouts.header />
    <x-profiles.hero />

    <!-- Konten Utama -->
    <div class="flex items-center justify-center min-h-screen mt-4 bg-gray-100">
        <div class="container p-5 pl-10 mx-auto md:pl-20">
            <!-- Kotak PROFIL dan Pendidik -->
            <div class="flex flex-col mb-5 space-y-5 md:flex-row md:items-start md:space-x-5 md:space-y-0">
                <div style="background-color: #2D336B;" class="w-[200px] shadow-md p-5 text-center">
                    <h1 class="text-xl font-bold text-white">PROFIL</h1>
                </div>
                <div style="background-color: #2D336B;" class="w-[300px] shadow-md p-5 text-center md:ml-5 md:mt-0 mt-0">
                    <h1 class="text-xl font-bold text-white">Pendidik dan Tendik</h1>
                </div>
            </div>

            <!-- Garis Pembatas -->
            <div class="w-[200px] border-b-4 border-blue-900 mb-5"></div>

            <!-- Konten dan Sidebar -->
            <div class="flex flex-col md:flex-row">
                <!-- Sidebar Menu Profil -->
                <x-profiles.aside />

                <!-- Konten -->
                <div class="w-full p-5 bg-gray-100 rounded-lg">
                    <div class="mt-4">
                        <!-- Pendidik  -->
                        @foreach ($teachers as $teacher)
                            <x-profiles.teachercard :teacher="$teacher" />
                        @endforeach
                    </div>
                </div>
            </div>
            <x-pagination :paginator="$teachers" />
            <x-breadcrumb />
        </div>
    </div>

    <x-layouts.footer />

    <!-- Popup Container -->
    <div id="popup" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="relative bg-white p-4 shadow-lg rounded-lg max-w-[90vw] max-h-[90vh] overflow-hidden">
            <button onclick="closePopup()" class="absolute text-3xl text-gray-600 top-3 right-3 hover:text-gray-900">
                &times;
            </button>
            <img id="popupImage" src="" alt="Popup Image"
                class="max-w-full max-h-[80vh] rounded-md object-contain">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const popup = document.getElementById("popup");
            const popupImage = document.getElementById("popupImage");

            function openPopup(src) {
                popupImage.src = src;
                popup.classList.remove("hidden");
                popup.classList.add("flex");
            }

            function closePopup() {
                popup.classList.add("hidden");
                popup.classList.remove("flex");
            }

            popup.addEventListener("click", function(event) {
                if (event.target === popup) {
                    closePopup();
                }
            });

            document.addEventListener("keydown", function(event) {
                if (event.key === "Escape") {
                    closePopup();
                }
            });

            window.openPopup = openPopup;
            window.closePopup = closePopup;
        });
    </script>


</x-layouts>
