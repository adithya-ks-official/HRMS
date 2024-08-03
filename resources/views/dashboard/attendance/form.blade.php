<form action="{{ url('attendance') }}" method="post">
    @csrf
    <label for="employee_id">Employee ID:</label>
    <input type="text" name="employee_id" id="employee_id" required>
    <label for="date">Date:</label>
    <input type="date" name="date" id="date" required>
    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="present">Present</option>
        <option value="absent">Absent</option>
    </select>
    <button type="submit">Submit</button>
</form>
