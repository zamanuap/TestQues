@extends('heading')
    
    @section('content')
    
     <div class="outer-div">      
    
     <div class="inner1-div">
        Your data is saved. Go to listing page to see.
     </div>
     
    <div class="inner2-div">
        <label class="field" for="">Name</label>
        <label class="colon" for="">:</label>
        <label class="data" for="">{{$inserted_record->name}}</label>
        <br>
        <label class="field" for="">Province</label>
        <label class="colon" for="">:</label>
        <label class="data" for="">{{$inserted_record->province}}</label>
        <br>
        <label class="field" for="">Telephone</label>
        <label class="colon" for="">:</label>
        <label class="data" for="">{{$inserted_record->telephone}}</label>
        <br>
        <label class="field" for="">Postal code</label>
        <label class="colon" for="">:</label>
        <label class="data" for="">{{$inserted_record->post_code}}</label>
        <br>
        <label class="field" for="">Salary</label>
        <label class="colon" for="">:</label>
        <label class="data" for="">{{$inserted_record->salary}}</label>
        
    </div>
    </div>
    <script src="../js/link2.js"></script>
    
    @stop