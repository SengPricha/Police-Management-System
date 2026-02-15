<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
const isStaffOpen = ref(route().current("staff.*"));
const isOneOpen = ref(route().current("one.*"));
const isTwoOpen = ref(route().current("two.*"));
const isThreeOpen = ref(route().current("two.*"));
const isPoliceDropdownOpen = ref(false);
const searchQuery = ref("");

const Icons = {
    Search: `<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>`,
    Dashboard: `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"/><rect width="7" height="5" x="14" y="3" rx="1"/><rect width="7" height="9" x="14" y="12" rx="1"/><rect width="7" height="5" x="3" y="16" rx="1"/></svg>`,
    Staff: `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>`,
    Department: `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"/><path d="m3 9 2.45-4.9A2 2 0 0 1 7.24 3h9.52a2 2 0 0 1 1.8 1.1L21 9"/></svg>`,
    Leave: `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>`,
    Attendance: `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/><path d="m9 16 2 2 4-4"/></svg>`,
    Report: `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="20" x2="12" y2="10"/><line x1="18" y1="20" x2="18" y2="4"/><line x1="6" y1="20" x2="6" y2="16"/></svg>`,
    Logout: `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>`,
};
</script>

<template>
    <div class="min-h-screen bg-[#F8F9FA] flex">
        <aside
            class="w-76 bg-white border-r border-gray-100 flex flex-col fixed h-full z-20 shadow-sm"
        >
            <div
                class="flex items-center gap-1 p-2 border-b border-gray-200 bg-white h-28"
            >
                <img
                    src="/images/logo1.png"
                    alt="Logo"
                    class="w-20 h-auto object-contain"
                />

                <div class="leading-tight">
                    <h1 class="text-[12px] text-gray-800 font-moul">
                        ស្នងការដ្ឋាននគរបាលខេត្តប៉ៃលិន
                    </h1>
                    <h2
                        class="text-[12px] font-semibold text-gray-600 uppercase tracking-wide"
                    >
                        Commission de Police Pailin
                    </h2>
                </div>
            </div>

            <nav class="flex-1 px-6 space-y-2 mt-4 font-kantumruy">
                <Link
                    :href="route('dashboard')"
                    :class="
                        route().current('dashboard')
                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                    "
                    class="flex items-center px-4 py-3 rounded-xl font-bold transition-all duration-300"
                >
                    <span class="mr-3" v-html="Icons.Dashboard"></span>
                    ផ្ទាំងគ្រប់គ្រង
                </Link>

                <div class="space-y-1">
                    <button
                        @click="isStaffOpen = !isStaffOpen"
                        :class="
                            route().current('staff.*')
                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                        "
                        class="flex items-center justify-between w-full px-4 py-3 rounded-xl font-bold transition-all duration-300 focus:outline-none"
                    >
                        <div class="flex items-center">
                            <span class="mr-3" v-html="Icons.Staff"></span>
                            <span>រចនាសម្ព័ន្ធ</span>
                        </div>
                        <svg
                            class="w-4 h-4 transition-transform duration-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </button>

                    <transition
                        enter-active-class="transition ease-out duration-200"
                        enter-from-class="opacity-0 -translate-y-2 scale-95"
                        enter-to-class="opacity-100 translate-y-0 scale-100"
                        leave-active-class="transition ease-in duration-150"
                        leave-from-class="opacity-100 translate-y-0 scale-100"
                        leave-to-class="opacity-0 -translate-y-2 scale-95"
                    >
                        <div
                            v-show="isStaffOpen"
                            class="mt-2 ml-6 space-y-1 border-l-2 border-gray-100 pl-4"
                        >
                            <div class="space-y-1 mt-1 relative group/sub">
                                <button
                                    title="I-អង្គភាពស្នងការដ្ឋានខេត្តប៉ៃលិន"
                                    @click="isOneOpen = !isOneOpen"
                                    :class="
                                        route().current('one.*')
                                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                    "
                                    class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                >
                                    <span
                                        class="whitespace-nowrap overflow-hidden text-ellipsis w-36"
                                        >I-អង្គភាពស្នងការដ្ឋានខេត្តប៉ៃលិន</span
                                    >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                    >
                                        <rect
                                            width="24"
                                            height="24"
                                            fill="none"
                                        />
                                        <path
                                            fill="currentColor"
                                            d="M7.38 21.01c.49.49 1.28.49 1.77 0l8.31-8.31a.996.996 0 0 0 0-1.41L9.15 2.98c-.49-.49-1.28-.49-1.77 0s-.49 1.28 0 1.77L14.62 12l-7.25 7.25c-.48.48-.48 1.28.01 1.76"
                                        />
                                    </svg>
                                </button>
                                <div
                                    class="absolute left-full top-0 ml-2 w-56 bg-white shadow-lg rounded-xl p-2 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-200 z-[999]"
                                >
                                    <button
                                        title="* ស្នងការ និងស្នងការរង"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        * ស្នងការ និងស្នងការរង
                                    </button>

                                    <button
                                        title="១- ផែនការងារធនធានមនុស្ស"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none relative group/sub2"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >១- ផែនការងារធនធានមនុស្ស</span
                                        >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="14"
                                            height="14"
                                            viewBox="0 0 24 24"
                                        >
                                            <rect
                                                width="24"
                                                height="24"
                                                fill="none"
                                            />
                                            <path
                                                fill="currentColor"
                                                d="M7.38 21.01c.49.49 1.28.49 1.77 0l8.31-8.31a.996.996 0 0 0 0-1.41L9.15 2.98c-.49-.49-1.28-.49-1.77 0s-.49 1.28 0 1.77L14.62 12l-7.25 7.25c-.48.48-.48 1.28.01 1.76"
                                            />
                                        </svg>
                                    </button>
                                    <div
                                        class="absolute left-full top-12 ml-2 w-56 bg-white shadow-lg rounded-xl p-2 opacity-0 invisible group-hover/sub:opacity-100 group-hover/sub:visible transition-all duration-200 z-[999]"
                                    >
                                        <button
                                            title="១- ការិយាល័យបុគ្គលិក"
                                            :class="
                                                route().current('two.*')
                                                    ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                    : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                            "
                                            class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                        >
                                            <span
                                                class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                                >១- ការិយាល័យបុគ្គលិក</span
                                            >
                                        </button>
                                        <button
                                            title="២- ការិយាល័យបណ្ដុះបណ្តាល"
                                            :class="
                                                route().current('two.*')
                                                    ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                    : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                            "
                                            class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                        >
                                        <span class="whitespace-nowrap overflow-hidden text-ellipsis w-44">២- ការិយាល័យបណ្ដុះបណ្តាល</span>
                                        </button>
                                        <button
                                            title="៣- ការិយាល័យផ្សព្វផ្សាយអប់រំ"
                                            :class="
                                                route().current('two.*')
                                                    ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                    : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                            "
                                            class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                        >
                                            <span class="whitespace-nowrap overflow-hidden text-ellipsis w-44">៣- ការិយាល័យផ្សព្វផ្សាយអប់រំ</span>
                                        </button>
                                    </div>

                                    <button
                                        title="២- ផែនការងារសេនាធិការ"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        ២- ផែនការងារសេនាធិការ
                                    </button>
                                    <button
                                        title="៣- ផែនការងារនគរបាលព្រហ្មទណ្ឌ"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >៣- ផែនការងារនគរបាលព្រហ្មទណ្ឌ</span
                                        >
                                    </button>
                                    <button
                                        title="៤- ផែនការងារនគរបាលប្រឆាំងបទល្មើសសេដ្ឋកិច្ច"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >៤-
                                            ផែនការងារនគរបាលប្រឆាំងបទល្មើសសេដ្ឋកិច្ច</span
                                        >
                                    </button>
                                    <button
                                        title="៥- ផែនការងារប្រឆាំងគ្រឿងញៀន"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >៥- ផែនការងារប្រឆាំងគ្រឿងញៀន</span
                                        >
                                    </button>
                                    <button
                                        title="៦- ផែនការងារប្រឆាំងការជួញដូរមនុស្ស និងការពារអនីតិជន និងការពារយេនឌ័រ"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >៦- ផែនការងារប្រឆាំងការជួញដូរមនុស្ស
                                            និងការពារអនីតិជន
                                            និងការពារយេនឌ័រ</span
                                        >
                                    </button>
                                    <button
                                        title="៧- ផែនការងារសន្ដិសុខ"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >៧- ផែនការងារសន្ដិសុខ</span
                                        >
                                    </button>
                                    <button
                                        title="៨- ផែនការងារសណ្ដាប់ធ្នាប់"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >៨- ផែនការងារសណ្ដាប់ធ្នាប់</span
                                        >
                                    </button>
                                    <button
                                        title="៩- ផែនការងារគ្រប់គ្រងអាវុធជាតិផ្ទុះ និងអគ្គីភ័យ"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >៩- ផែនការងារគ្រប់គ្រងអាវុធជាតិផ្ទុះ
                                            និងអគ្គីភ័យ</span
                                        >
                                    </button>
                                    <button
                                        title="១០- ផែនការងារអន្ដោប្រវេសន៍"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >១០- ផែនការងារអន្ដោប្រវេសន៍</span
                                        >
                                    </button>
                                    <button
                                        title="១១- ផែនការងារអត្តសញ្ញាណកម្ម"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >១១- ផែនការងារអត្តសញ្ញាណកម្ម</span
                                        >
                                    </button>
                                    <button
                                        title="១២- ផែនការងារភស្ដុភារ និងហិរញ្ញវត្ថុ"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >១២- ផែនការងារភស្ដុភារ
                                            និងហិរញ្ញវត្ថុ</span
                                        >
                                    </button>
                                    <button
                                        title="១៣- ផែននគរបាលការពារព្រំដែនគោកលេខ៨២១"
                                        :class="
                                            route().current('one.*')
                                                ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                                : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                        "
                                        class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                    >
                                        <span
                                            class="whitespace-nowrap overflow-hidden text-ellipsis w-44"
                                            >១៣-
                                            ផែននគរបាលការពារព្រំដែនគោកលេខ៨២១</span
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </transition>
                    <transition
                        enter-active-class="transition ease-out duration-200"
                        enter-from-class="opacity-0 -translate-y-2 scale-95"
                        enter-to-class="opacity-100 translate-y-0 scale-100"
                        leave-active-class="transition ease-in duration-150"
                        leave-from-class="opacity-100 translate-y-0 scale-100"
                        leave-to-class="opacity-0 -translate-y-2 scale-95"
                    >
                        <div
                            v-show="isStaffOpen"
                            class="mt-2 ml-6 space-y-1 border-l-2 border-gray-100 pl-4"
                        >
                            <div class="space-y-1 mt-1">
                                <button
                                    title="II-អធិការដ្ឋាននគរបាលក្រុងប៉ៃលិន និងអធិការដ្ឋាននគរបាលស្រុកសាលាក្រៅ (ចំណុះស្នងការដ្ឋានខេត្តប៉ៃលិន)"
                                    @click="isOneOpen = !isOneOpen"
                                    :class="
                                        route().current('one.*')
                                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                    "
                                    class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                >
                                    <span
                                        class="whitespace-nowrap overflow-hidden text-ellipsis w-36"
                                        >II-អធិការដ្ឋាននគរបាលក្រុងប៉ៃលិន
                                        និងអធិការដ្ឋាននគរបាលស្រុកសាលាក្រៅ
                                        (ចំណុះស្នងការដ្ឋានខេត្តប៉ៃលិន)</span
                                    >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                    >
                                        <rect
                                            width="24"
                                            height="24"
                                            fill="none"
                                        />
                                        <path
                                            fill="currentColor"
                                            d="M7.38 21.01c.49.49 1.28.49 1.77 0l8.31-8.31a.996.996 0 0 0 0-1.41L9.15 2.98c-.49-.49-1.28-.49-1.77 0s-.49 1.28 0 1.77L14.62 12l-7.25 7.25c-.48.48-.48 1.28.01 1.76"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </transition>
                    <transition
                        enter-active-class="transition ease-out duration-200"
                        enter-from-class="opacity-0 -translate-y-2 scale-95"
                        enter-to-class="opacity-100 translate-y-0 scale-100"
                        leave-active-class="transition ease-in duration-150"
                        leave-from-class="opacity-100 translate-y-0 scale-100"
                        leave-to-class="opacity-0 -translate-y-2 scale-95"
                    >
                        <div
                            v-show="isStaffOpen"
                            class="mt-2 ml-6 space-y-1 border-l-2 border-gray-100 pl-4"
                        >
                            <div class="space-y-1 mt-1">
                                <button
                                    title="III-វរសេនាតូចនគរបាលការពារព្រំដែនគោកលេខ៨២១ (ចំណុះស្នងការដ្ឋាន)"
                                    @click="isOneOpen = !isOneOpen"
                                    :class="
                                        route().current('one.*')
                                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                                    "
                                    class="flex items-center justify-between w-full py-2 px-4 rounded-xl text-md transition-colors focus:outline-none"
                                >
                                    <span
                                        class="whitespace-nowrap overflow-hidden text-ellipsis w-36"
                                        >III-វរសេនាតូចនគរបាលការពារព្រំដែនគោក
                                        លេខ៨២១(ចំណុះស្នងការដ្ឋាន)</span
                                    >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                    >
                                        <rect
                                            width="24"
                                            height="24"
                                            fill="none"
                                        />
                                        <path
                                            fill="currentColor"
                                            d="M7.38 21.01c.49.49 1.28.49 1.77 0l8.31-8.31a.996.996 0 0 0 0-1.41L9.15 2.98c-.49-.49-1.28-.49-1.77 0s-.49 1.28 0 1.77L14.62 12l-7.25 7.25c-.48.48-.48 1.28.01 1.76"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </transition>
                </div>
                <Link
                    :href="route('departments.index')"
                    :class="
                        route().current('departments.*')
                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                    "
                    class="flex items-center px-4 py-3 rounded-xl font-bold transition-all duration-300"
                >
                    <span class="mr-3" v-html="Icons.Department"></span>
                    សំណុំលិខិត
                </Link>

                <Link
                    :href="route('attendance.index')"
                    :class="
                        route().current('attendance.*')
                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                    "
                    class="flex items-center px-4 py-3 rounded-xl font-bold transition-all duration-300"
                >
                    <span class="mr-3" v-html="Icons.Attendance"></span>
                    ការងារសិក្សា
                </Link>

                <Link
                    :href="route('leaves.index')"
                    :class="
                        route().current('leaves.*')
                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                    "
                    class="flex items-center px-4 py-3 rounded-xl font-bold transition-all duration-300"
                >
                    <span class="mr-3" v-html="Icons.Leave"></span>វិន័យ
                </Link>

                <Link
                    :href="route('reports.index')"
                    :class="
                        route().current('reports.*')
                            ? 'bg-[#01AAEB] text-white shadow-lg shadow-blue-100'
                            : 'text-gray-500 hover:bg-[#01AAEB] hover:text-white'
                    "
                    class="flex items-center px-4 py-3 rounded-xl font-bold transition-all duration-300"
                >
                    <span class="mr-3" v-html="Icons.Report"></span>
                    សោធននិវត្តន៍
                </Link>
            </nav>

            <div class="p-6 border-t border-gray-200">
                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="w-full flex items-center px-4 py-3 bg-red-500 font-kantumruy text-white font-kontumruy hover:bg-red-400 rounded-xl transition-all"
                >
                    <span class="mr-3" v-html="Icons.Logout"></span>
                    ចាកចេញពីប្រព័ន្ធ
                </Link>
            </div>
        </aside>

        <!-- <div class="flex-1 ml-72">
            <header
                class="h-28 bg-white border-b border-gray-100 flex items-center justify-end px-10 sticky top-0 z-10 shadow-sm"
            >
                <div class="flex items-center space-x-4">
                    <div class="text-right">
                        <p
                            class="text-md font-black text-gray-800 leading-none mb-1"
                        >
                            {{ $page.props.auth.user.username }}
                        </p>
                        <p class="text-[14px] font-bold text-[#01AAEB]">
                            Admin
                        </p>
                    </div>
                    <div
                        class="w-12 h-12 rounded-full overflow-hidden border-2 border-gray-50"
                    >
                        <img
                            src="/images/admin_image.png"
                            alt="Profile"
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </header>

            <main class="p-10">
                <slot />
            </main>
        </div> -->
        <div class="flex-1 ml-72">
            <header
                class="h-28 bg-white border-b border-gray-100 flex items-center px-10 sticky top-0 z-10 shadow-sm"
            >
                <div class="flex-1"></div>

                <div class="flex-[2] flex justify-center">
                    <div class="relative w-full max-w-2xl">
                        <!-- Search icon -->
                        <span
                            class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-500 pointer-events-none"
                            v-html="Icons.Search"
                        ></span>

                        <!-- Clear text icon (SVG + circle background) -->
                        <button
                            v-if="searchQuery"
                            @click="searchQuery = ''"
                            class="absolute right-4 top-1/2 -translate-y-1/2 w-7 h-7 rounded-full bg-gray-200 flex items-center justify-center transition-all"
                            aria-label="Clear search"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-4 h-4 text-gray-600"
                            >
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>

                        <!-- Input -->
                        <input
                            v-model="searchQuery"
                            type="text"
                            placeholder="ស្វែងរកអត្តលេខ ឬឈ្មោះមន្រ្តី ..."
                            class="w-full font-kantumruy h-12 pl-12 pr-14 rounded-3xl bg-white focus:ring-2 focus:ring-[#01AAEB] transition-all font-medium text-gray-600"
                        />
                    </div>
                </div>

                <div class="flex-1 flex justify-end">
                    <div class="flex items-center space-x-2">
                        <div
                            class="w-16 h-16 rounded-full overflow-hidden border-2 border-gray-50 shadow-sm"
                        >
                            <img
                                src="/images/admin2.png"
                                alt="Profile"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="text-left">
                            <p
                                class="text-md font-black text-gray-800 leading-none mb-1"
                            >
                                {{ $page.props.auth.user.username }}
                            </p>
                            <p class="text-[14px] font-bold text-[#01AAEB]">
                                Admin
                            </p>
                        </div>
                    </div>
                </div>
            </header>

            <main class="p-10">
                <slot />
            </main>
        </div>
    </div>
</template>
