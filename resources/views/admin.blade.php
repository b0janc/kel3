<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Komi Caffe</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #3B82F6;
        }

        .shadow-soft {
            box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        }
    </style>

</head>

<body>

    <!-- Navbar -->

    <div class="px-12 pt-10">

        <div class="flex items-center justify-between">

            <!-- Search -->

            <div class="relative w-[70%]">

                <i
                    class="fa-solid fa-magnifying-glass absolute left-8 top-1/2 -translate-y-1/2 text-sky-400 text-3xl">
                </i>

                <input
                    type="text"
                    placeholder=""
                    class="w-full h-16 rounded-2xl bg-white pl-20 pr-5 outline-none shadow-soft">

            </div>

            <!-- Icon -->

            <div class="flex items-center gap-5">

                <button
                    class="w-16 h-16 rounded-full bg-white shadow-soft flex items-center justify-center">

                    <i class="fa-solid fa-user-shield text-blue-500 text-3xl"></i>

                </button>

                <button
                    class="w-16 h-16 rounded-full bg-white shadow-soft flex items-center justify-center">

                    <i class="fa-solid fa-user text-blue-500 text-3xl"></i>

                </button>

            </div>

        </div>

    </div>



    <!-- Container -->

    <div class="px-12 mt-10">

        <div class="bg-white rounded-3xl shadow-soft overflow-hidden">

            <!-- Header -->

            <div
                class="bg-blue-300 h-24 rounded-t-3xl flex items-center text-white text-4xl">

                <div class="w-[7%] flex justify-center">

                    <input
                        type="checkbox"
                        class="w-7 h-7 accent-blue-500">

                </div>

                <div class="w-[28%] text-center">

                    Gambar

                </div>

                <div class="w-[20%] text-center">

                    Harga

                </div>

                <div class="w-[20%] text-center">

                    Status

                </div>

                <div class="w-[25%] text-center">

                    Aksi

                </div>

            </div>



            <!-- BODY -->

            <div class="bg-white p-8 space-y-6">

                <!-- ROW -->

                <div
                    class="bg-blue-50 rounded-2xl p-8 flex items-center shadow-sm">

                    <!-- Checkbox -->

                    <div class="w-[7%] flex justify-center">

                        <input
                            type="checkbox"
                            class="w-7 h-7 accent-blue-500">

                    </div>

                    <!-- Gambar -->

                    <div class="w-[28%] flex justify-center">

                        <img
                            src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400"
                            class="w-52 h-32 rounded-lg object-cover shadow">

                    </div>

                    <!-- Harga -->

                    <div class="w-[20%] flex justify-center">

                        <div
                            class="bg-blue-200 px-5 py-3 shadow">

                            Rp.10.000,00

                        </div>

                    </div>

                    <!-- Status -->

                    <div
                        class="w-[20%] flex flex-col items-center gap-3">

                        <button
                            class="bg-blue-200 px-5 py-2 shadow">

                            Ditampilkan

                        </button>

                        <button
                            class="bg-blue-200 px-5 py-2 shadow">

                            Sembunyikan

                        </button>

                    </div>

                    <!-- Action -->

                    <div
                        class="w-[25%] flex justify-center gap-5">

                        <button
                            class="bg-blue-300 px-8 py-3 shadow hover:bg-blue-400 duration-300">

                            Ubah

                        </button>

                        <button
                            class="bg-blue-300 px-8 py-3 shadow hover:bg-red-400 hover:text-white duration-300">

                            Hapus

                        </button>

                    </div>

                </div>

                <!-- Duplicate Row -->
                <!-- Nanti saat memakai Laravel tinggal @foreach -->

                <div
                    class="bg-blue-50 rounded-2xl p-8 flex items-center shadow-sm">

                    <div class="w-[7%] flex justify-center">

                        <input
                            type="checkbox"
                            class="w-7 h-7 accent-blue-500">

                    </div>

                    <div class="w-[28%] flex justify-center">

                        <img
                            src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400"
                            class="w-52 h-32 rounded-lg object-cover shadow">

                    </div>

                    <div class="w-[20%] flex justify-center">

                        <div class="bg-blue-200 px-5 py-3 shadow">

                            Rp.10.000,00

                        </div>

                    </div>

                    <div class="w-[20%] flex flex-col items-center gap-3">

                        <button class="bg-blue-200 px-5 py-2 shadow">
                            Ditampilkan
                        </button>

                        <button class="bg-blue-200 px-5 py-2 shadow">
                            Sembunyikan
                        </button>

                    </div>

                    <div class="w-[25%] flex justify-center gap-5">

                        <button
                            class="bg-blue-300 px-8 py-3 shadow">

                            Ubah

                        </button>

                        <button
                            class="bg-blue-300 px-8 py-3 shadow">

                            Hapus

                        </button>

                    </div>

                </div>

            </div>

        </div>

        <!-- Footer -->

        <div class="flex justify-end items-center mt-8 gap-10">

            <div class="text-white text-lg">

                &lt; 1,2,3 &gt; |
                Menampilkan 1-3 dari 20

            </div>

            <button
                class="bg-blue-200 px-10 py-3 shadow-soft hover:bg-white duration-300">

                Simpan

            </button>

        </div>

    </div>

</body>

</html>