<script setup>
import { ref } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const leaveRequests = ref([
    {
        id: "L-001",
        name: "VAN SOTHEARA",
        type: "Annual Leave",
        from: "01-Feb-2026",
        to: "03-Feb-2026",
        duration: "3 Days",
        reason: "Family trip",
        status: "Pending",
    },
    {
        id: "L-002",
        name: "VUN VATTANAK",
        type: "Sick Leave",
        from: "10-Feb-2026",
        to: "11-Feb-2026",
        duration: "2 Days",
        reason: "Fever",
        status: "Approved",
    },
    {
        id: "L-003",
        name: "SENG PRICHA",
        type: "Special Leave",
        from: "15-Feb-2026",
        to: "15-Feb-2026",
        duration: "1 Day",
        reason: "Wedding ceremony",
        status: "Rejected",
    },
]);
</script>

<template>
    <Head title="Leave | Hope For Cambodian Children" />
    <AuthenticatedLayout>
        <div class="p-6 space-y-6 font-khmer">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-black text-gray-700">
                    Leave Management
                </h2>
                <button
                    class="bg-[#01AAEB] text-white px-6 py-2.5 rounded-xl font-bold hover:bg-blue-500 transition-all shadow-sm"
                >
                    Request Leave
                </button>
            </div>

            <div
                class="bg-white rounded-[30px] shadow-sm border border-gray-100 p-6 overflow-hidden"
            >
                <table class="w-full">
                    <thead>
                        <tr
                            class="text-[11px] font-black text-gray-400 uppercase tracking-widest border-b border-gray-50 text-center"
                        >
                            <th class="pb-6 px-2">ID</th>
                            <th class="pb-6 px-2 text-left">Staff Name</th>
                            <th class="pb-6 px-2">Leave Type</th>
                            <th class="pb-6 px-2">Duration</th>
                            <th class="pb-6 px-2">Reason</th>
                            <th class="pb-6 px-2">Status</th>
                            <th class="pb-6 px-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-[13px] text-center">
                        <tr
                            v-for="leave in leaveRequests"
                            :key="leave.id"
                            class="border-b border-gray-50 last:border-0 hover:bg-gray-50/50"
                        >
                            <td class="py-6 font-black text-gray-700">
                                {{ leave.id }}
                            </td>
                            <td
                                class="py-6 text-left font-black text-[#4A5568]"
                            >
                                {{ leave.name }}
                            </td>
                            <td class="py-6 font-black text-blue-500">
                                {{ leave.type }}
                            </td>
                            <td class="py-6 font-black text-gray-500">
                                {{ leave.from }} - {{ leave.to }}
                            </td>
                            <td class="py-6 text-gray-400 font-medium italic">
                                "{{ leave.reason }}"
                            </td>
                            <td class="py-6">
                                <span
                                    :class="{
                                        'px-3 py-1 rounded-full text-[10px] font-black uppercase': true,
                                        'bg-yellow-50 text-yellow-500':
                                            leave.status === 'Pending',
                                        'bg-green-50 text-green-500':
                                            leave.status === 'Approved',
                                        'bg-red-50 text-red-500':
                                            leave.status === 'Rejected',
                                    }"
                                >
                                    {{ leave.status }}
                                </span>
                            </td>
                            <td class="py-6">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="p-1.5 text-orange-400 hover:bg-orange-50 rounded-lg"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                            />
                                        </svg>
                                    </button>
                                    <button
                                        class="p-1.5 text-red-400 hover:bg-red-50 rounded-lg"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="18"
                                            height="18"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="2"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                            />
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
