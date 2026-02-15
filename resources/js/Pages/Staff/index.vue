<script setup>
import { ref } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const showAddBox = ref(false);

const staticStaff = [
    {
        n: "១",
        username: "ព្រិន្ធបាលទោ",
        name: "អ៊ូ ដេវីដ",
        gender: "ប្រុស",
        id: "១០៦៥៨៩",
        role: "មន្ដ្រី",
    },
];
</script>

<template>
    <Head title="Staff Management | Hope For Cambodian Children" />

    <AuthenticatedLayout>
        <div class="space-y-6 font-khmer">
            <div
                class="flex justify-between items-center bg-white p-6 rounded-[25px] shadow-sm border border-gray-50"
            >
                <div class="flex items-center">
                    <div class="w-1.5 h-8 bg-[#01AAEB] rounded-full mr-3"></div>
                    <h2 class="text-md font-moul text-gray-600">
                        បញ្ជីតារាងឈ្មោះមន្រ្តី
                    </h2>
                </div>
                <button
                    @click="showAddBox = true"
                    class="bg-[#01AAEB] text-white px-8 py-3 rounded-2xl font-kantumruy text-sm shadow-lg shadow-blue-100 hover:bg-[#0096D1] transition-all"
                >
                    + បន្ថែមមន្រ្តី
                </button>
            </div>

            <transition name="modal">
                <div
                    v-if="showAddBox"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 backdrop-blur-sm p-4"
                >
                    <div
                        class="bg-white w-full max-w-4xl rounded-[35px] shadow-2xl overflow-hidden animate-zoom"
                    >
                        <div class="p-8 pb-4 border-b border-gray-50">
                            <h3 class="text-2xl font-moul text-[#1A202C]">
                                តារាងព័ត៌មានមន្រ្តី
                            </h3>
                        </div>

                        <div
                            class="p-8 grid grid-cols-1 md:grid-cols-3 gap-5 font-moul text-[12px]"
                        >
                            <div
                                v-for="label in ['លេខរៀង']"
                                :key="label"
                                class="flex flex-col"
                            >
                                <label
                                    class="text-[12px] font-bold text-black/50 mb-1 ml-1"
                                    >{{ label }}</label
                                >
                                <input
                                    type="text"
                                    class="border-gray-100 bg-gray-50 rounded-xl h-12 focus:ring-[#01AAEB] focus:border-[#01AAEB]"
                                />
                            </div>

                            <div class="flex flex-col">
                                <label
                                    class="text-[12px] font-bold text-black/50 mb-1 ml-1"
                                    >ឋាន្ដនរស័ក្ដិ</label
                                >
                                <select
                                    class="border-gray-100 text-[12px] bg-gray-50 rounded-xl h-12 focus:ring-[#01AAEB]"
                                >
                                    <option>នាយឧត្តមសេនីយ៍</option>
                                    <option>ឧត្តមសេនីយ៍ឯក</option>
                                    <option>ឧត្តមសេនីយ៍ទោ</option>
                                    <option>ឧត្តមសេនីយ៍ត្រី</option>
                                </select>
                            </div>

                            <div
                                v-for="label in ['ឈ្មោះ']"
                                :key="label"
                                class="flex flex-col"
                            >
                                <label
                                    class="text-[12px] font-bold text-black/50 mb-1 ml-1"
                                    >{{ label }}</label
                                >
                                <input
                                    type="text"
                                    class="border-gray-100 bg-gray-50 rounded-xl h-12 focus:ring-[#01AAEB] focus:border-[#01AAEB]"
                                />
                            </div>

                            <div class="flex flex-col">
                                <label
                                    class="text-[12px] font-bold text-black/50 mb-1 ml-1"
                                    >ភេទ</label
                                >
                                <select
                                    class="border-gray-100 text-[12px] bg-gray-50 rounded-xl h-12 focus:ring-[#01AAEB]"
                                >
                                    <option value="">-- ភេទ --</option>

                                    <option>ប្រុស</option>
                                    <option>ស្រី</option>
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label
                                    class="text-[12px] font-bold text-black/50 mb-1 ml-1"
                                    >តួនាទី</label
                                >
                                <select
                                    class="border-gray-100 text-[12px] bg-gray-50 rounded-xl h-12 focus:ring-[#01AAEB]"
                                >
                                    <option>មន្ដ្រី</option>
                                    <option>នាយផ្នែក</option>
                                </select>
                            </div>
                        </div>

                        <div class="p-16 pt-0 grid grid-cols-2 gap-4">
                            <button
                                class="bg-[#01AAEB] text-white py-4 rounded-2xl font-black shadow-lg shadow-blue-100 hover:bg-[#0096D1] uppercase tracking-widest transition-all"
                            >
                                រក្សាទុក
                            </button>
                            <button
                                @click="showAddBox = false"
                                class="bg-red-500 text-white py-4 rounded-2xl font-black hover:bg-red-400 uppercase tracking-widest transition-all"
                            >
                                បោះបង់
                            </button>
                        </div>
                    </div>
                </div>
            </transition>

            <div
                class="bg-white rounded-[30px] shadow-sm p-8 border border-gray-50 overflow-x-auto"
            >
                <table class="w-full text-left min-w-[1300px]">
                    <thead>
                        <tr
                            class="text-[14px] text-gray-600 font-moul uppercase border-b border-gray-200 text-center"
                        >
                            <th class="pb-5 px-2">លេខរៀង</th>
                            <th class="pb-5 px-2">ឋានន្ដរស័ក្ដិ</th>
                            <th class="pb-5 px-2">ឈ្មោះ</th>
                            <th class="pb-5 px-2">ភេទ</th>
                            <th class="pb-5 px-2">អត្តលេខ</th>
                            <th class="pb-5 px-2">តួនាទី</th>
                            <th class="pb-5 px-2">សកម្មភាព</th>
                            <!-- <th class="pb-5 px-2 text-left">Address</th>
                            <th class="pb-5 px-2">Position</th>
                            <th class="pb-5 px-2">Education Level</th>
                            <th class="pb-5 px-2">Start Date</th>
                            <th class="pb-5 px-2">End Date</th>
                            <th class="pb-5 px-2">Status</th>
                            <th class="pb-5 px-2">Action</th> -->
                        </tr>
                    </thead>
                    <tbody
                        class="text-[16px] font-bold text-gray-500 text-center"
                    >
                        <tr
                            v-for="staff in staticStaff"
                            :key="staff.id"
                            class="border-b border-gray-50 hover:bg-gray-50/50 transition"
                        >
                            <td class="py-5 px-2">{{ staff.n }}</td>
                            <td class="py-5 px-2">{{ staff.username }}</td>
                            <td class="py-5 px-2">
                                {{ staff.name }}
                            </td>
                            <td class="py-5 px-2 uppercase">
                                {{ staff.gender }}
                            </td>
                            <td class="py-5 px-2">{{ staff.id }}</td>
                            <td class="py-5 px-2">{{ staff.role }}</td>
                            <!-- <td
                                class="py-5 px-2 text-left truncate max-w-[150px]"
                            >
                                {{ staff.address }}
                            </td>
                            <td class="py-5 px-2">{{ staff.position }}</td>
                            <td class="py-5 px-2">
                                {{ staff.education }}
                            </td>
                            <td class="py-5 px-2">
                                {{ staff.start_date }}
                            </td>
                            <td class="py-5 px-2 text-gray-300">
                                {{ staff.end_date }}
                            </td>
                            <td class="py-5 px-2">
                                <span
                                    class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-[10px] uppercase font-black"
                                    >{{ staff.status }}</span
                                >
                            </td> -->
                            <td class="py-5 px-2">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="p-2 text-[#FFC107] hover:bg-[#f9d56a4d] rounded-lg transition-colors"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <path
                                                d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
                                            ></path>
                                            <path
                                                d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
                                            ></path>
                                        </svg>
                                    </button>
                                    <button
                                        class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        >
                                            <polyline
                                                points="3 6 5 6 21 6"
                                            ></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"
                                            ></path>
                                            <line
                                                x1="10"
                                                y1="11"
                                                x2="10"
                                                y2="17"
                                            ></line>
                                            <line
                                                x1="14"
                                                y1="11"
                                                x2="14"
                                                y2="17"
                                            ></line>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
.font-khmer {
    font-family: "Kantumruy Pro", sans-serif !important;
}
.modal-enter-active,
.modal-leave-active {
    transition: opacity 0.3s ease;
}
.modal-enter-from,
.modal-leave-to {
    opacity: 0;
}
.animate-zoom {
    animation: zoom 0.3s ease-out;
}
@keyframes zoom {
    from {
        transform: scale(0.95);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}
th,
td {
    white-space: nowrap;
}
</style>
