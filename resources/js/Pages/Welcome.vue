<template>
    <div class="bg-slate-700 h-screen">
        <div class="flex flex-col w-4/12 top-1/3 left-1/3 absolute">
            <ul class="text-3xl text-slate-200 mx-auto">
                <li class="list-disc"> {{ movie.citation1 }} </li>
            </ul>
            <input class="h-8 my-6">
            <button class="bg-blue-600 hover:bg-blue-700 text-slate-200 mx-auto rounded-lg px-6 py-1 text-2xl">Guess</button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['movie'],
    data() {
        return {
        }
    },
}
</script>
