<center><h3 class="plan__name" style="font-size: 30px">Tabla de precios</h3></center><br>
<div class="pricing-table">
    <div class="plan">
        <h3 class="plan__name">Mayorista</h3><as style="font-size:13px">Numero de pedidos mensual esta entre</as><span class="plan__price">75-200</span>
        <ul class="plan__features">
            <li>Las ventas menores de <strong>$25,000 </strong> no tienen comision </li>
            <li>Para ventas entre  <strong>$30,000 y $50,000 </strong>  la comision es de $350 por cada venta</li>
            <li>Para ventas mayores a <strong>$50,000 </strong>  la comision es de <strong>$500 </strong>  por cada venta</li>
        </ul><a class="signup" href="#0">Pruebalo el primer es gratis</a></div>
    <div class="plan selected">
        <h3 class="plan__name">Empresa</h3><as style="font-size:13px">Numero de pedidos mensual es mayor a</as><span class="plan__price"><200</span>
        <ul class="plan__features">
            <li>Las ventas menores de <strong>$30,000 </strong> no tienen comision </li>
            <li>Para ventas entre <strong>$30,000 y $50,000 </strong> la  comision es de $300 por cada venta</li>
            <li>Para ventas mayores a <strong>$50,000 </strong>  la comision es de <strong>$450 </strong>  por cada venta</li>
        </ul><a class="signup" href="#0">Pruebalo el primer es gratis</a></div>
    <div class="plan">
        <h3 class="plan__name">Mircroempresa</h3><as style="font-size:13px">Numero de pedidos mensual esta entre</as><span class="plan__price">0-75</span>
        <ul class="plan__features">
            <li>Las ventas menores de <strong>$12,500 </strong> no tienen comision </li>
            <li>Para ventas entre  <strong>$30,000 y $50,000 </strong>  la comision es de $400 por cada venta</li>
            <li>Para ventas mayores a <strong>$50,000 </strong>  la comision es de <strong>$600 </strong>  por cada venta</li>
        </ul><a class="signup" href="#0">Pruebalo el primer es gratis</a></div>
</div>
<style type="text/css">
    @import 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700';
 html {
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box;
}
 *, *:before, *:after {
     box-sizing: inherit;
}
 body {
     font-family: 'Droid Sans', sans-serif;
     font-size: 100%;
     color: #232323;
}
 .pricing-table {
     width: 100%;
     max-width: 960px;
     padding: 0 10px;
     margin: 50px ;
}
 @media (min-width: 600px) {
     .pricing-table {
         display: flex;
         justify-content: space-between;
    }
}
 .plan {
     background-image: linear-gradient(180deg, #f3f2f9 28%, #fff 28%);
     border: 1px solid #c4c4c4;
     border-radius: 0.25em;
     box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
     padding: 12px 0px;
     margin: 20px 0;
     text-align: center;
}
 @media (min-width: 600px) {
     .plan {
         width: 32%;
    }
     .plan.selected {
         box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
         width: 34%;
         margin-top: -10px;
         margin-bottom: -10px;
    }
}
 .plan.selected {
     background-image: linear-gradient(180deg, #e3e1f1 28%, #fff 28%);
}
 .plan__name {
     font-weight: 300;
}
 .plan__price {
     display: block;
     color: #7b7b7b;
     width: 80px;
     height: 80px;
     line-height: 80px;
     margin: 30px auto 60px;
     background-color: #fff;
     text-align: center;
     font-size: 1.5em;
     font-family: Georgia, serif;
     border-radius: 50%;
     box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3) inset, 0px 0px 0px 10px #fff, 0px 0px 10px 11px rgba(0, 0, 0, 0.4);
}
 .plan__features {
     margin: 0 0 30px 0;
     padding: 0;
     background-color: #fff;
     list-style-type: none;
}
 .plan__features li {
     padding: 10px 10px;
     border-top: 1px solid #c4c4c4;
     font-size: 0.875em;
}
 .plan .signup {
     display: inline-block;
     padding: 10px 25px;
     text-decoration: none;
     color: #fff;
     background-color: #05c314;
     border-radius: 3px;
     font-size: 12px;
     text-transform: uppercase;
}
 
</style>