<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

const staticStaff = [
    {
        n: "1",
        username: "ព្រិន្ទបាលទោ",
        name: "អ៊ូ ដេវីដ",
        gender: "ប្រុស",
        dob: "01-01-1990",
        id: "106589",
        role: "មន្ដ្រី",
        joined: "01-01-2026",
        status: "សកម្ម",
    },
    {
        n: "2",
        username: "ព្រិន្ទបាលទោ",
        name: "អ៊ូ ដេវីដ",
        gender: "ប្រុស",
        dob: "01-01-1990",
        id: "106589",
        role: "មន្ដ្រី",
        joined: "01-01-2026",
        status: "សកម្ម",
    },
    {
        n: "3",
        username: "ព្រិន្ទបាលទោ",
        name: "អ៊ូ ដេវីដ",
        gender: "ប្រុស",
        dob: "01-01-1990",
        id: "106589",
        role: "មន្ដ្រី",
        joined: "01-01-2026",
        status: "សកម្ម",
    },
];
</script>

<template>
    <Head title="ផ្ទាំងគ្រប់គ្រង | ស្នងការដ្ឋាននគរបាលខេត្តប៉ៃលិន" />

    <AuthenticatedLayout>
        <div class="space-y-6 font-khmer">
            <div
                class="flex justify-between items-center bg-white p-6 rounded-[25px] shadow-sm border border-gray-50"
            >
                <div class="flex items-center">
                    <div class="w-1.5 h-8 bg-[#01AAEB] rounded-full mr-3"></div>
                    <h2 class="text-md text-gray-600">
                        បញ្ជីតារាងឈ្មោះមន្រ្តី
                    </h2>
                </div>
                <Link
                    :href="route('dashboard.create')"
                    class="bg-[#01AAEB] text-white px-8 py-3 rounded-2xl font-kantumruy text-md shadow-lg shadow-blue-100 hover:bg-[#0096D1] transition-all"
                >
                    + បន្ថែមមន្រ្តី
                </Link>
            </div>

            <div
                class="bg-white rounded-[30px] shadow-sm p-8 border border-gray-50 overflow-x-auto"
            >
                <table class="w-full text-left min-w-[1300px]">
                    <thead>
                        <tr
                            class="text-[14px] text-gray-600 font-moul border-b border-gray-200 text-center"
                        >
                            <th class="pb-5 px-2">លេខរៀង</th>
                            <th class="pb-5 px-2">ឋានន្ដរស័ក្ដិ</th>
                            <th class="pb-5 px-2">ឈ្មោះ</th>
                            <th class="pb-5 px-2">ភេទ</th>
                            <th class="pb-5 px-2">ថ្ងៃខែឆ្នាំកំណើត</th>
                            <th class="pb-5 px-2">អត្តលេខ</th>
                            <th class="pb-5 px-2">តួនាទី</th>
                            <th class="pb-5 px-2">ថ្ងៃខែឆ្នាំចូលនគរបាលជាតិ</th>
                            <th class="pb-5 px-2">ស្ថានភាព</th>
                            <th class="pb-5 px-2">សកម្មភាព</th>
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
                            <td class="py-2 px-2">{{ staff.n }}</td>
                            <td class="py-2 px-2">{{ staff.username }}</td>
                            <td class="py-2 px-2">
                                {{ staff.name }}
                            </td>
                            <td class="py-2 px-2 uppercase">
                                {{ staff.gender }}
                            </td>
                            <td class="py-2 px-2 uppercase">
                                {{ staff.dob }}
                            </td>
                            <td class="py-2 px-2">{{ staff.id }}</td>
                            <td class="py-2 px-2">{{ staff.role }}</td>
                            <td class="py-2 px-2 uppercase">
                                {{ staff.joined }}
                            </td>
                            <td class="py-2 px-2 uppercase">
                                {{ staff.status }}
                            </td>
                            <td class="py-2 px-2">
                                <div class="flex justify-center space-x-2">
                                    <Link
                                        :href="route('dashboard.show')"
                                        class="p-2 cursor-pointer inline-block"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-blue-500 hover:bg-blue-50 rounded-lg transition-colors"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                            />
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5
                                                c4.477 0 8.268 2.943 9.542 7
                                                -1.274 4.057-5.065 7-9.542 7
                                                -4.477 0-8.268-2.943-9.542-7z"
                                            />
                                        </svg>
                                    </Link>
                                    <Link
                                        :href="route('dashboard.edit')"
                                        class="p-2 cursor-pointer inline-block"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 text-[#FFC107] hover:bg-[#ffc1074d] rounded-lg transition-colors"
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
                                    </Link>
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
