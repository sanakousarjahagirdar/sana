<style>
    .top-content{
        background-color: #d9d9d9;
    }
</style>
<div class="container">
    <table border=1 style="border-collapse:collapse;" class="top-content table table-bordered">
        <tbody>
            <tr>
                <td><strong>Name: </strong>{{ session()->get('name') }}</td>
                <td><strong>ID: </strong>{{ session()->get('student_id') }}</td>
                <td><strong>Standard: </strong>{{ session()->get('std') }}</td>
                <td><strong>Division: </strong>{{ session()->get('dv') }}</td>
            </tr>
        </tbody>
    </table>
</div>
