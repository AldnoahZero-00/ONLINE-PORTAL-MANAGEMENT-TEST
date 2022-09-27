@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
               STUDENT INFORMATION
            </div>
            <table id='regtable' class='table table-hover table-responsive table-bordered'>
                <tbody>
                <tr>
                        <td scope='col' style='text-align:center;' class='table-primary  table-bordered'> ID </td>
                        <td scope='col' style='text-align:center;'>{{ $student-> id }}</td>
                    </tr>                    
                    <tr>
                        <td scope='col' style='text-align:center;' class='table-primary  table-bordered'> NAME </td>
                        <td scope='col' style='text-align:center;'>{{ $student-> name }}</td>
                    </tr>
                    <tr>
                        <td scope='col' style='text-align:center;' class='table-primary'> STUDENT TYPE </td>
                        <td scope='col' style='text-align:center;'>{{ $student-> stud_type }}</td>
                    </tr>
                    <tr>
                        <td scope='col' style='text-align:center;' class='table-primary'> LEVEL </td>
                        <td scope='col' style='text-align:center;'>{{ $student-> acad_lvl }}</td>
                    </tr>
                    <tr>
                        <td scope='col' style='text-align:center;' class='table-primary'> GRADE LEVEL </td>
                        <td scope='col' style='text-align:center;'>{{ $student-> acad_yrlvl }}</td>
                    </tr>
                    <tr>
                        <td scope='col' style='text-align:center;' class='table-primary'>COURSE STRAND </td>
                        <td scope='col' style='text-align:center;'>{{ $student-> acad_crse }}</td>
                    </tr>  
                </tbody>
            </table>
            <div class="text-center">
                <form action=" {{ route('finances.verify', $student->id) }}">
                    @csrf 
                    <button type='button' class='btn btn-primary'>VERIFY</button>
                </form>
                <hr>
                <a href="/finances/">
                    <button type='button' class='btn btn-primary'>GO BACK</button>
                </a> 
            </div>

 
        </div>
    </div>
@endsection