<?php
$conn = mysqli_connect('localhost','root','root','test');
$query = "SELECT count('id') FROM users WHERE deleted_at is null";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_row($result);
$total_row = $row[0];
$request_per_page = 10;
$total_page = ceil($total_row/$request_per_page);
mysqli_close($conn);
?>

    @extends('heading')
    
    @section('content')    
    
    <div class="outer-div">         
    <div class="inner-div">
       <table class="table">
           <thead>
               <tr>
                   <td>Name</td>
                   <td>Province</td>
                   <td>Telephone</td>
                   <td>Postal code</td>
                   <td>Salary</td>
                   <td>Action</td>
               </tr>
            </thead>
            <tbody id="show_record">
              
            </tbody>
       </table>

       <div id="page" class="page">
           
       </div>
        
        </div>   <!-- inner-div -->
        </div>   <!-- outer-div -->
        
    <script type=text/javascript>
        var request_per_page = {{ $request_per_page }};
        var total_page = {{ $total_page }};
        
        function showPageRecord(page_no) 
        {
        var show_record = document.getElementById("show_record");
        var pageCtrl = document.getElementById("page");
        var xmlhttp = new XMLHttpRequest();
            
        xmlhttp.open("POST", "getrecord.php", true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                var dataArray = this.responseText.split(";;");
                var html_output = "";
                
                for($i=0; $i< dataArray.length-1; $i++)
                    {
                     var item = dataArray[$i].split("|");
                     
                     html_output += "<tr><td>"+item[1]+"</td>"+"<td>"+item[2]+"</td>"+"<td>"+item[3]+"</td>"+"<td>"+item[4]+"</td>"+"<td>"+item[5]+"</td>"+"<td><a href=\"{{url('/')}}\/update/"+item[0]+"\">Update</a> | <a href=\"{{url('/')}}\/delete/"+item[0]+"/"+page_no+"\">Delete</a></td></tr>";   
                    }
                    show_record.innerHTML = html_output;
            }
         }
        
        xmlhttp.send("request_per_page="+request_per_page+"&total_page="+total_page+"&page_no="+page_no);
            
            
            // pagination code starts 
            var paginationctrl = "";
            
            if (total_page>5)
            {
            paginationctrl+='<ul class="pagination">';
            
            // to show '<' link
            if (page_no==1)
                paginationctrl+= '<li class="disabled"><a>&lt;</a></li>';
            else 
                paginationctrl+= '<li><a onclick="showPageRecord('+(page_no-1)+')">&lt;</a></li>';
            
            // to show page 1
            if(page_no==1)
                paginationctrl+= '<li class="active"><a onclick="showPageRecord('+1+')">1</a></li>';    
            else
                paginationctrl+= '<li><a onclick="showPageRecord('+1+')">1</a></li>';    
            
            // to show page 2,3
            if (page_no<=3)
                {
                if(page_no==2)
                    paginationctrl+= '<li class="active"><a onclick="showPageRecord('+2+')">2</a></li>';    
                else
                    paginationctrl+= '<li><a onclick="showPageRecord('+2+')">2</a></li>';
                
                if(page_no==3)
                    paginationctrl+= '<li class="active"><a onclick="showPageRecord('+3+')">3</a></li>';    
                else
                    paginationctrl+= '<li><a onclick="showPageRecord('+3+')">3</a></li>';  
                
                paginationctrl+= '<li class="disabled"><a>...</a></li>';    
                }
                    
            // to show two pages before last page
            if (page_no>=total_page-2)
                {
                if (page_no==total_page-2)
                    { 
                    paginationctrl+= '<li class="disabled"><a>...</a></li>';        
                    paginationctrl+= '<li class="active"><a onclick="showPageRecord('+page_no+')">'+page_no+'</a></li>';
                    paginationctrl+= '<li><a onclick="showPageRecord('+(page_no+1)+')">'+(page_no+1)+'</a></li>';
                    }
                
                if (page_no==total_page-1)
                    { 
                    paginationctrl+= '<li class="disabled"><a>...</a></li>';        
                    paginationctrl+= '<li><a onclick="showPageRecord('+(page_no-1)+')">'+(page_no-1)+'</a></li>';
                    paginationctrl+= '<li class="active"><a onclick="showPageRecord('+page_no+')">'+page_no+'</a></li>';   
                    }
                    
                if (page_no==total_page)
                    { 
                    paginationctrl+= '<li class="disabled"><a>...</a></li>';        
                    paginationctrl+= '<li><a onclick="showPageRecord('+(page_no-2)+')">'+(page_no-2)+'</a></li>';
                    paginationctrl+= '<li><a onclick="showPageRecord('+(page_no-1)+')">'+(page_no-1)+'</a></li>';   
                    }
                }
            // to show pages other than two pages before last page
                if (page_no>3 && page_no<total_page-2) 
                    { 
                    paginationctrl+= '<li class="disabled"><a>...</a></li>';
                    paginationctrl+= '<li class="active"><a onclick="showPageRecord('+page_no+')">'+page_no+'</a></li>';    
                    paginationctrl+= '<li class="disabled"><a>...</a></li>';    
                    }
                
            // to show last page
                if (page_no==total_page)
                    paginationctrl+= '<li class="active"><a onclick="showPageRecord('+total_page+')">'+total_page+'</a></li>';
                else 
                    paginationctrl+= '<li><a onclick="showPageRecord('+total_page+')">'+total_page+'</a></li>';
            
            // to show '>' link
            if (page_no==total_page)
                paginationctrl+= '<li class="disabled"><a>&gt;</a></li></ul>';
            else 
                paginationctrl+= '<li><a onclick="showPageRecord('+(page_no+1)+')">&gt;</a></li></ul>';
            
            
            pageCtrl.innerHTML = paginationctrl;
             
            } // end of if (total_page>5)
            
            
            else //if (total_page<=5)
            {
                paginationctrl+='<ul class="pagination">';
                
                // to show '<' link
                if (page_no==1)
                    paginationctrl+= '<li class="disabled"><a>&lt;</a></li>';
                else 
                    paginationctrl+= '<li><a onclick="showPageRecord('+(page_no-1)+')">&lt;</a></li>';

                // to show page 1 to 5
                for(var i=1;i<=total_page;i++)
                    if (i==page_no)
                        paginationctrl+= '<li class="active"><a onclick="showPageRecord('+i+')">'+i+'</a></li>';
                    else
                        paginationctrl+= '<li><a onclick="showPageRecord('+i+')">'+i+'</a></li>';
                
                // to show '>' link
                if (page_no==total_page)
                    paginationctrl+= '<li class="disabled"><a>&gt;</a></li></ul>';
                else 
                    paginationctrl+= '<li><a onclick="showPageRecord('+(page_no+1)+')">&gt;</a></li></ul>';
            
                
                pageCtrl.innerHTML = paginationctrl;
            }
            

        } // end of showPageRecord()
        
        // detecting the page no. of deleted item
        <?php if(session()->has('page_no_at_start'))
            $page_no_at_start = session('page_no_at_start')
        ?>
        
        showPageRecord({{$page_no_at_start}});
        
    </script>
    <script src="js/link.js"></script>
    
    @stop