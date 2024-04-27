<script setup lang="ts">
import { Head, Link , useForm, usePage } from '@inertiajs/vue3';

defineProps<{

    yosra?: string;
    ferdawes?: string;
    todos?: string;
}>();
const page = usePage().props.auth.user;

const from=useForm({
    name:page.name,
    email:page.email
});
</script>

<template>
    <Head title="Welcome" />
    <h1> ya yosra ya bhima </h1>
 <p>premiére{{$page.props.auth.todos}}</p>
 <form>
 <InputLabel For="name" value="Name"/>
 <TextInput id="name" type="text"/>
 
 </form>
  <p> deuxiéme{{$page.props.auth.user}}</p> 
                  
</template>

<style>

</style>
