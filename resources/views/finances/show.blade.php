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
                        <td scope='col' style='text-align:center;' class='table-primary'> ID </td>
                        <td scope='col' style='text-align:center;'>{{ $student-> id }}</td>
                    </tr>                    
                    <tr>
                        <td scope='col' style='text-align:center;' class='table-primary'> NAME </td>
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
                <form method="POST" action="{{ route('finances.verify', $student->id) }}">
                    @csrf
                    <input type="hidden" name="hidden_id" value="{{ $student->id }}" />
				    <input type="submit" class="btn btn-primary" value="VERIFY" />
                </form>
                <hr>
                <a href="/finances/">
                    <button type='button' class='btn btn-primary'>GO BACK</button>
                </a> 
            </div>

 
        </div>
    </div>
@endsection