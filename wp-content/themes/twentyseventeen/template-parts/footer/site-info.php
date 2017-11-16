<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info-mobile  ">
 <button><a href="tel:+380987847871" class="phonenew "> Call Us </button> 
 <button> <a href="mailto:testdomain@mail.to " >Email Us</button> 
 <button onclick="show('block')" class="b1">Contact Us  </button> 
</div><!-- .site-info -->

<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
</div><!-- .site-info -->
 
<div class="site-info2">
 <p>Call Us: 0987847871 </p> 
 <p>Email:	<a href="mailto:testdomain@mail.to " > testdomain@mail.to</a></p> 
 <button onclick="show('block')" class="b1">Contact Us </button> 
</div><!-- .site-info -->

<div onclick="show('none')" id="wrap"></div>

                                <div id="window" >                               
                                    <img class="close" onclick="show('none')" src="http://1effective.com/assets/img/close.png">

                                    <div class="col-md-7 contact-form animated fadeInLeft show1" >

                                            <div class="head2 sec-title text-center animated fadeInDown">                                                 
                                                <h4><p>Contact Us</p></h4>
                                            </div>
                                                <form id="form1" >
                                                    <div class="input-field" >
                                                        <input type="text" name="name" class="form-control " placeholder="name...">
                                                    </div>

                                                    <div class="input-field">
                                                        <input type="text" name="phone" class="form-control " placeholder="phone...">
                                                    </div>

                                                    <div class="input-field">
                                                        <input type="text" name="mail" class="form-control" placeholder="mail...">
                                                    </div>

                                                    <button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
                                                </form>
                                     </div>
                               </div>


 
 
<script>
 
// ФОРМА ВІДПРАВКИ
            function show(state){

                    document.getElementById('window').style.display = state;           
                    document.getElementById('wrap').style.display = state;             
            }    
 	
</script>

