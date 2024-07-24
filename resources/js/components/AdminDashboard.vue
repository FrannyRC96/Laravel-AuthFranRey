<template>
    <div>
        <h1>Admin Dashboard</h1>
        <!-- Aquí iría tu lógica para mostrar y editar usuarios -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: [],
        };
    },
    async created() {
        try {
            const response = await axios.get('/admin');
            this.users = response.data;
        } catch (error) {
            console.error(error);
        }
    },
};
</script>


