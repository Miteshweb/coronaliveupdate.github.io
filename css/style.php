<style >
	*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif; }

html{
	scroll-behavior: smooth;
}
.nav_style{ background-color: #E83B50!important; }


.nav_style a{ color: white; }

/*//////////////////////////////////main_header//////////////*/
.main_header{ height: 450px; width: 100%; }

.rightside h1{ font-size: 3rem; }

.corona_rot img{ animation: gocorona 3s linear infinite; }

.leftside img{ animation: heartbeat 5s linear infinite; }

@keyframes heartbeat{ 0% { transform: scale(.75); } 20%{ transform: scale(1); } 40%{ transform: scale(.75); } 60%{ transform: scale(1); } 80% { transform: scale(.75); } 100%{ transform: scale(.75); }}
@keyframes gocorona{ 0%{ transform: rotate(0); } 100% { transform: rotate(360deg); } }

/*/////////////corona_update///////////////*/

.corona_update{ margin: 0 0 30px 0 ; }

.corona_update h3{  color: #ff7675; }

.corona_update h1{ font-size: 2rem; text-align: center; }

/*/////////////////about///////////////*/

.sub_section{ background-color: #fbfafd; }

/*////////////////////////*/


#mybtn{
	/*display: none;*/
   position: fixed;
   bottom: 20px;
   right: 40px;
   z-index: 99;
   border: none;
   color: #fff;
   background: #00abff;
   padding: 10px;
   border-radius: 10px;
   cursor: pointer;
   padding: 10px;

}
#mybtn:hover{
	background: #606060;
}
.mit{ color: black; }

/*////////////////////////*/

@media(max-width: 768px){

   .main_header{ height: 700px; text-align: center;  margin-bottom: 5px;  }

.main_header h1{ text-align: center; padding: 0; width: 100%; font-size: 38px; }

.count_style{  display: inline!important; }

.about_rs{ margin-left: 0!important; text-align: center; }
.count_style p{ text-align: center; }

.img1{width="200" height="300"}
}

/*//////////////footer//////////*/

.row{ margin-left: 0!important; margin-right: 0!important; }

.footer_style{
	background-color: #a29bfe!important;
}

.footer_style p{	margin-bottom: 0!important;
}
</style>