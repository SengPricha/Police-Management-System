<script setup>
import { ref, computed } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";

const selectedDeptFilter = ref("All Departments");

const departments = ref(["IT Department", "Accounting", "HR", "Marketing"]);

const staffMembers = ref([
    {
        id: "001",
        name_kh: "វ៉ាន សុធារ៉ា",
        name_en: "VAN SOTHEARA",
        gender: "Male",
        dob: "02-May-2005",
        address: "Battambang",
        position: "Designer",
        department: "IT Department",
        education: "Bachelor Degree",
        start_date: "15-Mar-2023",
        end_date: "-",
        status: "ACTIVE",
    },
    {
        id: "002",
        name_kh: "វុន វឌ្ឍនៈ",
        name_en: "VUN VATTANAK",
        gender: "Male",
        dob: "23-Jun-1997",
        address: "Battambang",
        position: "Manager",
        department: "Accounting",
        education: "Bachelor Degree",
        start_date: "15-Mar-2023",
        end_date: "-",
        status: "ACTIVE",
    },
    {
        id: "003",
        name_kh: "សេង ព្រីជា",
        name_en: "SENG PRICHA",
        gender: "Male",
        dob: "11-Dec-2003",
        address: "Battambang",
        position: "Developer",
        department: "IT Department",
        education: "Bachelor Degree",
        start_date: "01-Jan-2023",
        end_date: "-",
        status: "ACTIVE",
    },
]);

const filteredStaff = computed(() => {
    if (selectedDeptFilter.value === "All Departments") {
        return staffMembers.value;
    }
    return staffMembers.value.filter(
        (staff) => staff.department === selectedDeptFilter.value,
    );
});
</script>

<template>
    <Head title="Departments | Hope For Cambodian Children" />

    <AuthenticatedLayout>
        <div class="space-y-6 font-khmer">
            <div class="flex justify-start items-center space-x-4">
                <select
                    v-model="selectedDeptFilter"
                    class="border-none bg-white shadow-sm rounded-xl text-sm font-bold text-gray-600 px-4 py-2.5 focus:ring-1 focus:ring-blue-400 w-64 appearance-none cursor-pointer"
                >
                    <option>All Departments</option>
                    <option v-for="dept in departments" :key="dept">
                        {{ dept }}
                    </option>
                </select>
            </div>

            <div
                class="bg-white rounded-[30px] shadow-sm border border-gray-100 p-8 overflow-hidden"
            >
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[1300px]">
                        <thead>
                            <tr
                                class="text-[12px] font-black text-gray-600 uppercase border-b border-gray-200"
                            >
                                <th class="pb-5 px-2 text-center">ID</th>
                                <th class="pb-5 px-2 text-left">Name KH</th>
                                <th class="pb-5 px-2 text-left">Name EN</th>
                                <th class="pb-5 px-2 text-center">Gender</th>
                                <th class="pb-5 px-2 text-center">DOB</th>
                                <th class="pb-5 px-2 text-left">Address</th>
                                <th class="pb-5 px-2 text-left">Position</th>
                                <th class="pb-5 px-2 text-left">
                                    Education Level
                                </th>
                                <th class="pb-5 px-2 text-center">
                                    Start Date
                                </th>
                                <th class="pb-5 px-2 text-center">End Date</th>
                                <th class="pb-5 px-2 text-center">Status</th>
                                <th class="pb-5 px-2 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-[13px]">
                            <tr
                                v-for="staff in filteredStaff"
                                :key="staff.id"
                                class="group border-b border-gray-50 last:border-0 hover:bg-gray-50/50 transition-all"
                            >
                                <td
                                    class="py-6 px-2 text-center font-black text-gray-500"
                                >
                                    {{ staff.id }}
                                </td>
                                <td
                                    class="py-6 px-2 text-left font-black text-gray-500"
                                >
                                    {{ staff.name_kh }}
                                </td>
                                <td
                                    class="py-6 px-2 text-left font-black text-gray-500 uppercase"
                                >
                                    {{ staff.name_en }}
                                </td>
                                <td
                                    class="py-6 px-2 text-center font-black text-gray-500"
                                >
                                    {{ staff.gender }}
                                </td>
                                <td
                                    class="py-6 px-2 text-center font-black text-gray-500"
                                >
                                    {{ staff.dob }}
                                </td>
                                <td
                                    class="py-6 px-2 text-left font-black text-gray-500"
                                >
                                    {{ staff.address }}
                                </td>
                                <td
                                    class="py-6 px-2 text-left font-black text-gray-500"
                                >
                                    {{ staff.position }}
                                </td>
                                <td
                                    class="py-6 px-2 text-left font-black text-gray-500"
                                >
                                    {{ staff.education }}
                                </td>
                                <td
                                    class="py-6 px-2 text-center font-black text-gray-500"
                                >
                                    {{ staff.start_date }}
                                </td>
                                <td
                                    class="py-6 px-2 text-center font-black text-gray-500"
                                >
                                    {{ staff.end_date }}
                                </td>
                                <td class="py-6 px-2 text-center">
                                    <span
                                        class="px-3 py-1 bg-green-50 text-[#48BB78] rounded-full text-[10px] font-black"
                                    >
                                        {{ staff.status }}
                                    </span>
                                </td>
                                <td class="py-6 px-2 text-center">
                                    <div
                                        class="flex justify-center items-center space-x-2"
                                    >
                                        <button
                                            class="text-[#FFC107] p-1 rounded-md hover:bg-orange-50 transition-colors"
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
                                            class="text-red-400 p-1 rounded-md hover:bg-red-50 transition-colors"
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
                            <tr v-if="filteredStaff.length === 0">
                                <td
                                    colspan="12"
                                    class="py-20 text-center text-gray-400 font-bold"
                                >
                                    No staff found in this department.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
.font-khmer {
    font-family: "Kantumruy Pro", sans-serif !important;
}
</style>
