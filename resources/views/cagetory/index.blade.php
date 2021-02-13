@extends('layout.master')

@section('content')

 <table><thead><tr>
     <td>ลำดับ</td>
     <td>ชื่อหมวดหมู่</td>
     <td>เมื่อสร้าง</td>
     <td>จัดการ</td>
 </tr>
</thead>
 <tboby>
    @foreach($category as $item)
    <tr>
    <td>1</td>
    <td>news</td>
    <td>เมื่อสร้าง</td>
    <td>จัดการ</td>
</tr></tboby></table>
 @endSection
