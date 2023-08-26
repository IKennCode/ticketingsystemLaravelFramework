@include('parts._head')
<form action="/departments/savedepartment">
    @csrf
    <input type="text" name="department_title" id="department_title" placeholder="department name" autofocus required>
    <input type="text" name="department_description" id="department_description" placeholder="department description" required>
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    <input type="submit" value="Save">
</form>
@include('parts._foot')