@extends('menus.layout')

@section('content')

<header style=" background-color: #666; padding: 30px ; text-align: left; font-size: 35px; grid-area: header; color: white;">
    <h1>School Curriculum</h1>
</header>

<div>
  
    <p>The Curriculum offered at St. George’s Girls’ Secondary school consists of 16 subjects listed below.</p>
    <table>
        <tr>
          <th>Firs</th>
          <th>Last Name</th>
          <th>Points</th>
          <th>subject</th>
        </tr>
        <tr>
          <td>English</td>
          <td>Biology</td>
          <td>Geography</td>
          <td>Computer Studies</td>
        </tr>
        <tr>
          <td>Kiswahili</td>
          <td>Physics</td>
          <td>Agriculture</td>
          <td>Art and Design</td>
        </tr>
        <tr>
          <td>French</td>
          <td>Chemistry</td>
          <td>Commerce</td>
          <td>Accounts</td>
        </tr>
        <tr>
          <td>Germany</td>
          <td>Mathematics</td>
          <td>Food and Nutrition</td>
          <td>C.R.E</td>
        </tr>
      </table>
</div>  
@endsection