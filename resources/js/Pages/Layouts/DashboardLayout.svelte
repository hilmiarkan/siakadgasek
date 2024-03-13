<script>
    import DashboardLayoutNavbar from "./Partials/DashboardLayoutNavbar.svelte";
    import DashboardLayoutSidebar from "./Partials/DashboardLayoutSidebar.svelte";

</script>
<div class="flex min-h-screen">
    <DashboardLayoutSidebar/>

    <div class="flex flex-1 flex-col">
        <DashboardLayoutNavbar/>
        <slot/>
    </div>

</div>
