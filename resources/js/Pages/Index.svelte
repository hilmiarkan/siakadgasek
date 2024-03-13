<script>
    import DashboardLayout from "./Layouts/DashboardLayout.svelte";
    import LightSidebarWithConstrainedContentArea from "./Components/TailwindUI/ApplicationShells/Sidebar/LightSidebarWithConstrainedContentArea.svelte";
    import Login from "./Components/Login.svelte";
    let users = [];

axios.get("/api/users").then(({ data: response }) => {
    users = response.data;
});

$: console.log(users);
</script>
<Login>
        <!-- Component: Table with hover state -->
        <div class="w-full overflow-x-auto">
            <table
                class="w-full text-left border border-separate rounded border-slate-200"
                cellspacing="0"
            >
                <tbody>
                    <tr>
                        <th
                            scope="col"
                            class="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100"
                            >Name</th
                        >
                        <th
                            scope="col"
                            class="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100"
                            >Title</th
                        >
                        <th
                            scope="col"
                            class="h-12 px-6 text-sm font-medium border-l first:border-l-0 stroke-slate-700 text-slate-700 bg-slate-100"
                            >Email</th
                        >
                    </tr>

                    {#each users as user, i (user.id)}
                        <tr
                            class="transition-colors duration-300 hover:bg-slate-50"
                        >
                            <td
                                class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500"
                            >
                                {i + 1}
                            </td>
                            <td
                                class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500"
                            >
                                {user.nama}
                            </td>
                            <td
                                class="h-12 px-6 text-sm transition duration-300 border-t border-l first:border-l-0 border-slate-200 stroke-slate-500 text-slate-500"
                            >
                                {user.email}
                            </td>
                        </tr>
                    {/each}
                </tbody>
            </table>
        </div>
        <!-- End Table with hover state -->
</Login>
