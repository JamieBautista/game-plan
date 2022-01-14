@extends('layouts.app')

@section('content')
    <div id="gamesPage">
        <div class="container">
            <div class="body">
                <h2>GAMES from LIST</h2>
                <div class="games-container">
                    <div class="game" >
                        <div class="status"><i class="fas fa-check-circle"></i></div>
                        <div class="status-description">
                            Game is bought.
                        </div>
                        <div class="title" data-header="title-1">
                            <div class="name">Game 1</div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="function-container">
                            <i class="far fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                    <div class="game-details" id="title-1">
                        <div class="detail"><span>Status:</span> Not Yet Bought</div> 
                        <div class="detail"><span>Genre:</span> Sim</div> 
                        <div class="detail"><span>Console:</span> PC</div> 
                        <div class="detail"><span>Price:</span> Php 20.00</div> 
                        <div class="detail"><span>Summary:</span> Lorem ipsum</div> 
                        <div class="detail"><span>Plans:</span> Lorem ipsum</div> 
                    </div>

                    <div class="game">
                        <div class="status"><i class="fas fa-check-circle"></i></div>
                        <div class="status-description">
                            Game is bought.
                        </div>
                        <div class="title" data-header="title-2">
                            <div class="name">Game 2</div>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="function-container">
                            <i class="far fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                    <div class="game-details" id="title-2">
                        <div class="detail"><span>Status:</span> Not Yet Bought</div> 
                        <div class="detail"><span>Genre:</span> Sim</div> 
                        <div class="detail"><span>Console:</span> PC</div> 
                        <div class="detail"><span>Price:</span> Php 20.00</div> 
                        <div class="detail"><span>Summary:</span> Lorem ipsum</div> 
                        <div class="detail"><span>Plans:</span> Lorem ipsum</div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('added-scripts')
<script>
    $(document).ready(function(){
        
        $(".games-container .game .title").on("click", function() {
            var header = $(this).data('header');
            
            if($("#" + header).hasClass('active')){
                $("#" + header).slideUp('slow');
                $("#" + header).removeClass('active')
            }
            else{
                $("#" + header).slideDown('slow');
                $("#" + header).addClass('active')
            }
        });
    });

</script>
@endsection