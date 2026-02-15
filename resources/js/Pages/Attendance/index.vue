<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

// Mock summary data
const stats = [
    { label: "Present", value: 95, color: "bg-[#8BC34A]" },
    { label: "Leave", value: 5, color: "bg-[#01AAEB]" },
    { label: "Absent", value: 12, color: "bg-[#F44336]" },
    { label: "Late", value: 8, color: "bg-[#FFC107]" },
];

// Mock attendance data
const attendances = [
    {
        id: "001",
        name: "Seng Pricha",
        department: "IT",
        position: "Developer",
        checkin1: "08:05",
        checkin2: "13:00",
        checkout1: "12:00",
        checkout2: "17:00",
        hours: "8h 55m",
        status: "Present",
    },
    {
        id: "002",
        name: "Van Sotheara",
        department: "HR",
        position: "Manager",
        checkin1: "08:40",
        checkin2: "—",
        checkout1: "12:00",
        checkout2: "17:10",
        hours: "8h 10m",
        status: "Late",
    },
    {
        id: "003",
        name: "Vun Vattanak",
        department: "IT",
        position: "Developer",
        checkin1: "—",
        checkin2: "—",
        checkout1: "—",
        checkout2: "—",
        hours: "0h 0m",
        status: "Absent",
    },
];
</script>

<template>
    <Head title="Attendance | Hope For Cambodian Children" />

    <AuthenticatedLayout>
        <div class="space-y-6">
            <!-- Header -->
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">
                        Attendance Management
                    </h1>
                    <p class="text-gray-500">Daily attendance records</p>
                </div>

                <div class="flex gap-2">
                    <input
                        type="date"
                        class="border-gray-300 rounded-lg text-sm"
                    />
                    <button
                        class="px-6 py-2 bg-[#01AAEB] text-white rounded-lg text-sm hover:bg-blue-700"
                    >
                        Export
                    </button>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div
                    v-for="stat in stats"
                    :key="stat.label"
                    class="p-7 rounded-2xl shadow-sm text-white transition hover:scale-105 duration-300"
                    :class="stat.color"
                >
                    <p class="text-sm opacity-90">{{ stat.label }}</p>
                    <p class="text-6xl font-bold">{{ stat.value }}</p>
                </div>
            </div>

            <!-- Filters -->
            <div
                class="bg-white p-4 rounded-xl shadow-sm border border-gray-100"
            >
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <select class="border-gray-300 rounded-xl text-sm h-12">
                        <option>All Departments</option>
                        <option>IT</option>
                        <option>HR</option>
                    </select>

                    <input
                        type="text"
                        placeholder="Search staff..."
                        class="border-gray-300 rounded-xl text-sm h-12"
                    />

                    <select class="border-gray-300 rounded-xl text-sm h-12">
                        <option>All Status</option>
                        <option>Present</option>
                        <option>Late</option>
                        <option>Absent</option>
                        <option>Leave</option>
                    </select>

                    <button
                        class="bg-gray-100 rounded-xl text-sm hover:bg-gray-200"
                    >
                        Reset
                    </button>
                </div>
            </div>

            <!-- Attendance Table -->
            <div
                class="bg-white rounded-[30px] shadow-sm p-8 border border-gray-100 overflow-x-auto"
            >
                <table class="w-full text-left min-w-[1300px] text-sm">
                    <thead>
                        <tr
                            class="text-[12px] font-black text-gray-600 uppercase border-b border-gray-200 text-center"
                        >
                            <th class="px-2 pb-5 text-left">ID</th>
                            <th class="px-2 pb-5 text-left">Name</th>
                            <th class="px-2 pb-5">Department</th>
                            <th class="px-2 pb-5 text-left">Position</th>
                            <th class="px-2 pb-5 ">Check In 1</th>
                            <th class="px-2 pb-5 ">Check Out 1</th>
                            <th class="px-2 pb-5 ">Check In 2</th>
                            <th class="px-2 pb-5 ">Check Out 2</th>
                            <th class="px-2 pb-5 ">Working Hours</th>
                            <th class="px-2 pb-5 ">Status</th>
                            <th class="px-2 pb-5 ">Action</th>
                        </tr>
                    </thead>

                    <tbody class="text-[13px] font-bold text-gray-500 text-center">
                        <tr
                            v-for="(item, index) in attendances"
                            :key="item.id"
                            class="border-t hover:bg-gray-50 text-gray-500"
                        >
                            <td class="px-2 py-5 text-left">{{ item.id }}</td>
                            <td class="px-2 py-5 text-left uppercase">
                                {{ item.name }}
                            </td>
                            <td class="px-2 py-5 ">
                                {{ item.department }}
                            </td>
                            <td class="px-2 py-5 text-left">
                                {{ item.position }}
                            </td>
                            <td class="px-2 py-5">
                                {{ item.checkin1 }}
                            </td>
                            <td class="px-2 py-5">
                                {{ item.checkout1 }}
                            </td>
                            <td class="px-2 py-5">
                                {{ item.checkin2 }}
                            </td>
                            <td class="px-2 py-5">
                                {{ item.checkout2 }}
                            </td>
                            <td class="px-2 py-5">
                                {{ item.hours }}
                            </td>
                            <td class="px-2 py-5">
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-semibold"
                                    :class="{
                                        'bg-green-100 text-[#8BC34A]':
                                            item.status === 'Present',
                                        'bg-[#f4ca4a45] text-[#FFC107]':
                                            item.status === 'Late',
                                        'bg-red-100 text-[#F44336]':
                                            item.status === 'Absent',
                                        'bg-[#01a9eb60] text-[#01AAEB]':
                                            item.status === 'Leave',
                                    }"
                                >
                                    {{ item.status }}
                                </span>
                            </td>
                            <td class="px-2 py-5">
                                <button
                                    class="text-blue-600 hover:underline text-sm"
                                >
                                    View
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
