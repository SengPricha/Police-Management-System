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
    <Head title="បង្ហាញព័ត៌មានមន្រ្តី | ស្នងការដ្ឋាននគរបាលខេត្តប៉ៃលិន" />
    <AuthenticatedLayout>
        <div
            class="bg-white px-6 py-4 rounded-2xl shadow-sm border border-gray-100 flex justify-between items-center mb-6"
        >
            <div class="flex justify-center items-center">
                <div class="w-1.5 h-8 bg-[#01AAEB] rounded-full mr-3"></div>
                <h1 class="text-md text-gray-800 font-kantumruy">ព័ត៌មានមន្រ្តី</h1>
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
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >ឋានន្ដរស័ក្ដ *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >ឈ្មោះ *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >ភេទ *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >ថ្ងៃខែឆ្នាំកំណើត *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>

                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >អត្តលេខ *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >តួនាទី *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >ថ្ងៃខែឆ្នាំចូលនគរបាលជាតិ *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >ស្ថានភាព *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div
                                    class="flex justify-between items-center w-48"
                                >
                                    <label
                                        class="text-md font-bold text-gray-700"
                                        >សំណុំឯកសារ *
                                    </label>
                                    <div
                                        class="text-md font-bold text-gray-700"
                                    >
                                        :
                                    </div>
                                </div>
                                <div></div>
                            </div>
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
