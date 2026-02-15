<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const fileInput = ref(null);
const imageUrl = ref(null);

const triggerUpload = () => fileInput.value.click();
const onFileChange = (e) => {
    const file = e.target.files[0];
    if (file) imageUrl.value = URL.createObjectURL(file);
};
</script>

<template>
    <Head title="កែប្រែព័ត៌មានមន្រ្តី | ស្នងការដ្ឋាននគរបាលខេត្តប៉ៃលិន" />
    <AuthenticatedLayout>
        <div
            class="bg-white px-6 py-4 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center mb-6"
        >
        <div class="flex justify-center items-center">
            <div class="w-1.5 h-8 bg-[#01AAEB] rounded-full mr-3"></div>
             <h1 class="text-md text-gray-800 font-kantumruy">កែប្រែព័ត៌មានមន្រ្តី</h1>
        </div>

            <Link
                href="/dashboard"
                class="flex bg-[#01AAEB] font-kantumruy hover:bg-[#018dbd] text-sm text-white px-4 py-2 rounded-lg items-center gap-2 transition-all"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="12"
                    height="24"
                    viewBox="0 0 12 24"
                >
                    <path
                        fill="currentColor"
                        fill-rule="evenodd"
                        d="m3.343 12l7.071 7.071L9 20.485l-7.778-7.778a1 1 0 0 1 0-1.414L9 3.515l1.414 1.414z"
                    />
                </svg>
                ត្រឡប់ក្រោយ
            </Link>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 items-start">
            <div
                class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 flex flex-col items-center h-full"
            >
                <div
                    class="w-48 h-48 rounded-full bg-[#01AAEB] flex items-center justify-center overflow-hidden mb-6 border-4 border-white shadow-md"
                >
                    <img
                        v-if="imageUrl"
                        :src="imageUrl"
                        class="w-full h-full object-cover"
                    />
                    <i
                        v-else
                        class="fa-solid fa-user-tie text-[#053e57] text-7xl"
                    ></i>
                </div>
                <input
                    type="file"
                    ref="fileInput"
                    class="hidden"
                    accept="image/*"
                    @change="onFileChange"
                />
                <button
                    @click="triggerUpload"
                    class="w-full bg-[#8BC34A] text-white font-kantumruy py-3 rounded-xl text-xs tracking-widest hover:bg-[#9ad656e1] transition-all shadow-lg shadow-red-100"
                >
                    <i class="fas fa-image mr-2"></i> បញ្ចូលរូបភាព
                </button>
            </div>

            <div
                class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden"
            >
                <h1 class="text-xl font-bold text-gray-800 p-8 font-kantumruy">
                    ព័ត៌មានមន្រ្តី
                </h1>
                <div class="p-8 font-kantumruy">
                    <div class="max-w-2xl mx-auto">
                        <div class="grid grid-cols-1 gap-5">
                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >ឋានន្ដរស័ក្ដ *</label
                                >
                                <select
                                    class="flex-1 border-gray-300 bg-white rounded-xl px-4 py-3 focus:border-[#01AAEB] focus:ring-2 focus:ring-[#01AAEB]/20 outline-none transition-all"
                                >
                                    <option disabled selected>
                                        ជ្រើសរើសឋានន្ដរស័ក្ដ
                                    </option>
                                    <option>នាយឧត្តមសេនីយ៍</option>
                                    <option>ឧត្តមសេនីយ៍ឯក</option>
                                    <option>ឧត្តមសេនីយ៍ទោ</option>
                                    <option>ឧត្តមសេនីយ៍ត្រី</option>
                                    <option>វរសេនីយ៍ឯក</option>
                                    <option>វរសេនីយ៍ទោ</option>
                                    <option>វរសេនីយ៍ត្រី</option>
                                    <option>អនុសេនីយ៍ឯក</option>
                                    <option>អនុសេនីយ៍ទោ</option>
                                    <option>អនុសេនីយ៍ត្រី</option>
                                    <option>ព្រិន្ទបាលឯក</option>
                                    <option>ព្រិន្ទបាលទោ</option>
                                    <option>ពលបាលឯក</option>
                                    <option>ពលបាលទោ</option>
                                    <option>ពលបាលត្រី</option>
                                </select>
                            </div>

                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >ឈ្មោះ *</label
                                >
                                <input
                                    type="text"
                                    class="flex-1 border border-gray-300 bg-white rounded-xl px-4 py-3 focus:border-[#01AAEB] focus:ring-2 focus:ring-[#01AAEB]/20 outline-none transition-all"
                                />
                            </div>

                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >ភេទ *</label
                                >
                                <select
                                    class="flex-1 border-gray-300 bg-white rounded-xl px-4 py-3 focus:border-[#01AAEB] focus:ring-2 focus:ring-[#01AAEB]/20 outline-none transition-all"
                                >
                                    <option disabled selected>
                                        ជ្រើសរើសភេទ
                                    </option>
                                    <option>ប្រុស</option>
                                    <option>ស្រី</option>
                                    <option>ផ្សេងៗ</option>
                                </select>
                            </div>

                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >ថ្ងៃខែឆ្នាំកំណើត *</label
                                >

                                <div class="flex flex-1 rounded-xl">
                                    <select
                                        class="w-1/4 border-l rounded-l-xl border-gray-400 bg-white outline-none px-4 py-3 appearance-none text-center hover:bg-gray-50 transition-colors"
                                    >
                                        <option disabled selected>Day</option>
                                        <option v-for="d in 31" :key="d">
                                            {{ d }}
                                        </option>
                                    </select>

                                    <select
                                        class="w-1/2 border-r border-gray-400 bg-white px-2 py-3 outline-none appearance-none text-center hover:bg-gray-50 transition-colors"
                                    >
                                        <option disabled selected>Month</option>
                                        <option
                                            v-for="month in [
                                                'January',
                                                'February',
                                                'March',
                                                'April',
                                                'May',
                                                'June',
                                                'July',
                                                'August',
                                                'September',
                                                'October',
                                                'November',
                                                'December',
                                            ]"
                                            :key="month"
                                        >
                                            {{ month }}
                                        </option>
                                    </select>

                                    <select
                                        class="w-1/4 bg-white px-2 py-3 rounded-r-xl outline-none appearance-none text-center hover:bg-gray-50 transition-colors"
                                    >
                                        <option disabled selected>Year</option>
                                        <option v-for="y in 60" :key="y">
                                            {{ 2026 - y }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >អត្តលេខ *</label
                                >
                                <input
                                    type="text"
                                    class="flex-1 border border-gray-300 bg-white rounded-xl px-4 py-3 focus:border-[#01AAEB] focus:ring-2 focus:ring-[#01AAEB]/20 outline-none transition-all"
                                />
                            </div>
                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >តួនាទី *</label
                                >
                                <select
                                    class="flex-1 border-gray-300 bg-white rounded-xl px-4 py-3 focus:border-[#01AAEB] focus:ring-2 focus:ring-[#01AAEB]/20 outline-none transition-all"
                                >
                                    <option disabled selected>
                                        ជ្រើសរើសតួនាទី
                                    </option>
                                    <option>ស្នងការ</option>
                                    <option>ស្នងការរង</option>
                                    <option>នាយការិយាល័យ</option>
                                    <option>នាយរងការិយាល័យ</option>
                                    <option>នាយផ្នែក</option>
                                    <option>នាយរងផ្នែក</option>
                                    <option>មន្រ្តី</option>
                                </select>
                            </div>
                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >ថ្ងៃខែឆ្នាំចូលនគរបាលជាតិ *</label
                                >

                                <div class="flex flex-1 rounded-xl">
                                    <select
                                        class="w-1/4 border-l rounded-l-xl border-gray-400 bg-white outline-none px-4 py-3 appearance-none text-center hover:bg-gray-50 transition-colors"
                                    >
                                        <option disabled selected>Day</option>
                                        <option v-for="d in 31" :key="d">
                                            {{ d }}
                                        </option>
                                    </select>

                                    <select
                                        class="w-1/2 border-r border-gray-400 bg-white px-2 py-3 outline-none appearance-none text-center hover:bg-gray-50 transition-colors"
                                    >
                                        <option disabled selected>Month</option>
                                        <option
                                            v-for="month in [
                                                'January',
                                                'February',
                                                'March',
                                                'April',
                                                'May',
                                                'June',
                                                'July',
                                                'August',
                                                'September',
                                                'October',
                                                'November',
                                                'December',
                                            ]"
                                            :key="month"
                                        >
                                            {{ month }}
                                        </option>
                                    </select>

                                    <select
                                        class="w-1/4 bg-white px-2 py-3 rounded-r-xl outline-none appearance-none text-center hover:bg-gray-50 transition-colors"
                                    >
                                        <option disabled selected>Year</option>
                                        <option v-for="y in 60" :key="y">
                                            {{ 2040 - y }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                    >ស្ថានភាព *</label
                                >
                                <select
                                    class="flex-1 border-gray-300 bg-white rounded-xl px-4 py-3 focus:border-[#01AAEB] focus:ring-2 focus:ring-[#01AAEB]/20 outline-none transition-all"
                                >
                                    <option disabled selected>
                                        ជ្រើសរើសស្ថានភាព
                                    </option>
                                    <option>ជាប់វិន័យ</option>
                                    <option>បេសកកម្ម</option>
                                    <option>សិក្សា</option>
                                    <option>ចូលនិវត្តន៍</option>
                                </select>
                            </div>
                            <div class="flex items-center gap-6">
                                <label
                                    class="text-md font-bold text-gray-700 w-48"
                                >
                                    សំណុំឯកសារ *
                                </label>

                                <label
                                    class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 rounded-lg shadow-sm cursor-pointer hover:bg-gray-50 transition-colors"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-blue-600"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"
                                        />
                                    </svg>
                                    <span
                                        class="text-sm font-medium text-gray-600"
                                        >ជ្រើសរើសឯកសារ</span
                                    >
                                    <input type="file" class="hidden" />
                                </label>
                            </div>
                        </div>

                        <div
                            class="mt-10 pt-6 border-t border-gray-50 flex justify-start items-center gap-4"
                        >
                            <button
                                class="bg-[#01AAEB] text-white px-6 py-2 rounded-xl text-md hover:scale-105 transition-all shadow-lg shadow-blue-100 active:scale-95 flex items-center gap-2"
                            >
                                <i class="fas fa-save"></i> រក្សាទុក
                            </button>
                            <button
                                class="bg-[#F44336] text-white px-6 py-2 rounded-xl text-md hover:scale-105 transition-all shadow-lg shadow-blue-100 active:scale-95 flex items-center gap-2"
                            >
                                <i class="fas fa-times"></i> បោះបង់
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css");
.animate-fade-in {
    animation: fadeIn 0.3s ease-out;
}
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
