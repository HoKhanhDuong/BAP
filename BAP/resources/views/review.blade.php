@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-5 mt-4 d-flex justify-content-center" >
            <img src="img/anh1.jpg" alt="anh1" style="width: 400px; height: 400px"/>
        </div>
        <div class="col-7 mt-4">
            <br/>
            <br/>
            <h3 class="card-title">Em se den cung con mua</h3>
            <p class="card-text"><span class="font-weight-bold">Tac gia:</span> Ichikawa Takuji</p>
            <h5 class="card-title">Noi dung:</h5>
            <p class="card-text">“Hôm nay là lần đầu tiên chúng mình gặp nhau với đôi giầy có cổ và có gót. Cũng phải nói thêm, hôm nay cũng là lần đầu tiên anh thấy em mặc chiếc váy liền màu đỏ sẫm. Lần đầu tiên anh thấy em tô son. Lần đầu tiên anh thấy mái tóc em đung đưa mỗi lần em nghiêng đầu, lần đầu tiên anh cảm thấy bồn chồn không yên khi nói chuyện với em.
                Tất cả đều là lần đầu tiên, đến nỗi mà khó tìm được một thứ không phải lần đầu tiên.’’</p> 
        
        </div>  
    </div>  
    <div class="response mt-4">
        <h4>Comments</h4>
        <form>
            <div class="form-row">
        
                <div class="col-11">
                    <input type="text" class="form-control" placeholder="Comment">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            
            </div>
        </form>

        <div class="media response-info">
            <div class="media-left response-text-left">
                <a href="#">
                    <img class="media-object" src="img/icon1.png" alt=""/>
                </a>
                <h5><a href="#">Admin</a></h5>
            </div>
            <div class="media-body response-text-right">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="media response-info">
            <div class="media-left response-text-left">
                <a href="#">
                    <img class="media-object" src="img/icon1.png" alt=""/>
                </a>
                <h5><a href="#">Admin</a></h5>
            </div>
            <div class="media-body response-text-right">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>		
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>	
</div>
@endsection