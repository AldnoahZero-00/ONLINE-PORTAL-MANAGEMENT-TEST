@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                   LIST OF STUDENTS
                </div>
                <table id='regtable' class='table table-hover table-responsive table-bordered'>
                    <thead class='table-primary'>
                        <tr>
                            <th scope='col' style='text-align:center;'>#            </th>
                            <th scope='col' style='text-align:center;'>Timestamp    </th>
                            <th scope='col' style='text-align:center;'>Student Name </th>
                            <th scope='col' style='text-align:center;'>Student Type </th>
                            <th scope='col' style='text-align:center;'>Level        </th>
                            <th scope='col' style='text-align:center;'>Grade Level  </th>
                            <th scope='col' style='text-align:center;'>Course Strand</th>
                            <th scope='col' style='text-align:center;'>Status       </th>
                            <th scope='col' style='text-align:center;'>Actions      </th>
                            <th scope='col' style='text-align:center;'>Remarks      </th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($students as $student)
                        <tr>
                            <td scope='col' style='text-align:center;'> {{ $loop -> index + 1}} </td>
                            <td scope='col' style='text-align:center;'> {{ $student['created_at'] }} </td>
                            <td scope='col' style='text-align:center;'> {{ $student['name'] }} </td>
                            <td scope='col' style='text-align:center;'> {{ $student['stud_type'] }}</td>
                            <td scope='col' style='text-align:center;'> {{ $student['acad_lvl'] }}</td>
                            <td scope='col' style='text-align:center;'> {{ $student['acad_yrlvl'] }}</td>
                            <td scope='col' style='text-align:center;'> {{ $student['acad_crse'] }} </td>
                            <td scope='col' style='text-align:center;'> 
                                @if($student['status'] == 0)
                                        <label type='label' class='btn btn-secondary' disabled> NOT VERIFIED </label>
                                @elseif($student['status'] == 1)
                                    <label type='label' class='btn btn-outline-primary' disabled> FINANCE VERIFIED </label>
                                @elseif($student['status'] == 2)
                                    <label type='label' class='btn btn-outline-success' disabled> STUDENT ENROLLED </label>
                                @endif
                            </td>

                            <td scope='col' style='text-align:center;'> 
                                <a href="/finances/{{ $student['id'] }}">
                                    <button type='button' class='btn btn-primary'>VIEW PROFILE</button>
                                </a> 
                            </td>

                            <td scope='col' style='text-align:center;'> 
                                @if($student['status'] == 0)
                                    <label type='label' class='btn btn-outline-secondary' disabled> WAITING FOR VERIFICATION</label>                               
                                @elseif($student['status'] == 1)
                                    <form method="POST" action="{{ route('finances.enroll', $student->id) }}">
                                        @csrf
                                        <input type="hidden" name="hidden_id" value="{{ $student->id }}" />
				                        <input type="submit" class="btn btn-warning" value=" SENT COE/OR" />
                                    </form>
                                    <!-- <label type='label' class='btn btn-warning' disabled> SENT COE/OR</label> -->

                                @elseif($student['status'] == 2)
                                    <label type='label' class='btn btn-outline-success' disabled> COE IS SENT </label>
                                @endif
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                




            </div>
        </div>
@endsection