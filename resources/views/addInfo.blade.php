@extends('heading')
  
   @section('content')    
    <div class="outer-div">      
    <div class="inner-div">
          
       <form method="post" action="">
       
       <input type="hidden" name="_token" value={{csrf_token()}} >
        
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           
            <label class="addLabel" for="">NAME<span>*</span></label>
            <input type="text" name="name">
            @if($errors->has('name'))
               <ul class="alert alert-danger">
                <li> {{$errors->first('name')}} </li>
               </ul>
            @endif

            <label class="addLabel" for="">PROVINCE<span>*</span></label>
            <select name="province" id="">
                <option value="" style="display:none"></option>
               @foreach($provinces as $province)
                <option value="{{$province->province}}"> {{$province->sl}}  {{$province->province}} </option>
               @endforeach
            </select>
            @if($errors->has('province'))
               <ul class="alert alert-danger">
                <li> {{$errors->first('province')}} </li>
               </ul>
            @endif
            
          </div>
         </div>
        </div>
            
            <div class="container-fluid">
             <div class="row">
             
              <div class="col-md-6">
                     <label class="addLabel" for="">TELEPHONE<span>*</span></label>
                     <input type="text" name="phone">
                     @if($errors->has('phone'))
                       <ul class="alert alert-danger">
                        <li> {{$errors->first('phone')}} </li>
                       </ul>
                     @endif
              </div>
              
              <div class="col-md-6">
                     <label class="addLabel" for="">POSTAL CODE<span>*</span></label>
                     <input type="text" name="postal">
                    @if($errors->has('postal'))
                       <ul class="alert alert-danger">
                        <li> {{$errors->first('postal')}} </li>
                       </ul>
                    @endif
              </div>
              
             </div>
            </div>
        
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-12">
           
            <label class="addLabel" for="">SALARY<span>*</span></label>
            <input type="text" name="salary">
            @if($errors->has('salary'))
               <ul class="alert alert-danger">
                <li> {{$errors->first('salary')}} </li>
               </ul>
            @endif
            <button type="submit" class="new-btn">SAVE</button>
            
          </div>
         </div>
        </div> 
        
        </form>
        
    </div>
    </div>
    
    <script src="js/link.js"></script>
   
    @stop
