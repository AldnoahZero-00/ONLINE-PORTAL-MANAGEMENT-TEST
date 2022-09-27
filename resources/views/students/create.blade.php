@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>REGISTER STUDENT</h1>
        <form action="/students/create" method="POST">
            @csrf
            <label for="name">STUDENT NAME:</label>
            <input type="text" name="name" id="name" required>
            <br><br>

            <label for="student_type">STUDENT TYPE:</label>
            <select name="student_type" id="student_type">
                <option value="Payment"> PAYMENT ONLY </option>
                <option value="Old"> OLD </option>
                <option value="New"> NEW </option>
            </select>
            <br><br>

            <label for="acad_lvl">ACADEMIC LEVEL:</label>
            <select name="acad_lvl" id="acad_lvl">
                <option value="Basic Education"> Basic Ed. </option>
                <option value="Tertiary"> Tertiary </option>
            </select>
            <br><br>

            <label for="acad_lvl">GRADE LEVEL :</label>
            <select name="acad_yrlvl" id="acad_yrlvl">
                <option value="1st Year"> 1ST YEAR </option>
                <option value="2nd Year"> 2ND YEAR </option>
                <option value="3rd Year"> 3RD YEAR </option>
                <option value="4th Year"> 4TH YEAR </option>
            </select>
            <br><br>

            <label for="acad_crse">COURSE/STRAND:</label>
            <select name="acad_crse" id="acad_crse">
                <option value="BSEntrep">       BSEntrep </option>
                <option value="BS CS">          BS ComScie </option>
                <option value="BA Buss. Econ">  BA Buss. Econ </option>
                <option value="BS Crim">        BS Crim</option>

            </select>
            <br><br>

            <input type="submit" value="REGISTER">
        </form>
        <br><br>
        <h4><a href="/students" class='Back'> BACK TO DASHBOARD </a> </h4>

    </div>
@endsection
