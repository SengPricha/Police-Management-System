<script setup>
import { onMounted } from "vue";
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    username: "",
    password: "",
    remember: false,
});

// សម្អាត Form រាល់ពេល Component ត្រូវបាន Load
onMounted(() => {
    form.reset();
});

const submit = () => {
    form.post(route("login"), {
        // បើ Login មិនជោគជ័យ សម្អាតតែ Password
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="ចូលប្រព័ន្ធ | ស្នងការដ្ឋាននគរបាលខេត្តប៉ៃលិន" />

        <div class="px-6 pb-10 md:px-12 md:pb-14 font-kantumruy">
            <div class="flex flex-col items-center mb-10">
                <img
                    src="/images/logo1.png"
                    alt="Admin Logo"
                    class="w-40 h-40 object-contain"
                />

                <h2 class="text-3xl font-black text-gray-800 tracking-tight">
                    អ្នកគ្រប់គ្រងចូលប្រព័ន្ធ
                </h2>
            </div>

            <div
                v-if="status"
                class="mb-6 text-sm font-medium text-green-600 bg-green-50 p-4 rounded-xl border border-green-100"
            >
                {{ status }}
            </div>

            <form @submit.prevent="submit" class="space-y-6" autocomplete="off">
                <div>
                    <InputLabel
                        for="username"
                        value="ឈ្មោះអ្នកប្រើ"
                        class="text-gray-500 font-bold ml-1 text-[13px] uppercase tracking-wide"
                    />

                    <TextInput
                        id="username"
                        type="text"
                        class="mt-2 block w-full border-gray-200 focus:border-[#01AAEB] focus:ring-[#01AAEB] rounded-xl shadow-sm transition duration-200 bg-gray-50/50 focus:bg-white h-12 px-4"
                        v-model="form.username"
                        required
                        autofocus
                        placeholder="បញ្ចូលឈ្មោះអ្នកប្រើ"
                        autocomplete="one-time-code"
                    />

                    <InputError class="mt-2" :message="form.errors.username" />
                </div>

                <div>
                    <InputLabel
                        for="password"
                        value="ពាក្យសម្ងាត់"
                        class="text-gray-500 font-bold ml-1 text-[13px] uppercase tracking-wide"
                    />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-2 block w-full border-gray-200 focus:border-[#01AAEB] focus:ring-[#01AAEB] rounded-xl shadow-sm transition duration-200 bg-gray-50/50 focus:bg-white h-12 px-4"
                        v-model="form.password"
                        required
                        placeholder="បញ្ចូលពាក្យសម្ងាត់"
                        autocomplete="new-password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="pt-4">
                    <PrimaryButton
                        class="w-full justify-center py-4 !bg-[#01AAEB] hover:!bg-[#0096d1] active:!bg-[#0084b8] text-white text-sm font-black rounded-xl shadow-lg shadow-blue-100 transition-all duration-300 ease-in-out transform hover:-translate-y-1 uppercase tracking-widest"
                        :class="{
                            'opacity-80 cursor-not-allowed': form.processing,
                        }"
                        :disabled="form.processing"
                    >
                        ចូលប្រព័ន្ធ
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>

<style>
slot > div:first-child svg,
.min-h-screen > div:first-child > a {
    display: none !important;
}

input:focus {
    box-shadow: 0 0 0 4px rgba(1, 170, 235, 0.1) !important;
}
</style>
