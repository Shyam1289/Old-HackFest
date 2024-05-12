function generate_agreement(borrower,collateral,collateral_amount,loan_amount,lender="CoalField Coders"){
   document.body.innerHTML=`<div class="header">
   <h1>Collateral Agreement</h1>
</div>
<br>
<div class="b1">
   <p>This collateral agreement is entered into by the following parties:<br> ${lender}, the Secured Party,<br><br>and ${borrower} ,the Debtor. <br><br> This Collateral agreement is created as of &nbsp; 07/7/2023.</p>
   <br><br>
   
</div>
<h2>Collateral <br></h2>
<div class="b2">
   <p>The debtor herby agrees to provide the Company : ${lender} with full rights and title of ownership to the following properties as collateral to secure the debt listed in the "Debt section" of this agreement : ${collateral} <br> 
   The Market value of the collateral is: ${collateral_amount}<br><br><br></p>
</div>
<h2>Debt</h2>
<div class="b3">
   <p>The collateral listed above is offered by the debtor in order to secure the following from the secured party :  ${loan_amount} <br><br><br></p>
</div>
<h2>Terms</h2>
<div class="b4"><p>The debtor warrants that no other creditor has the right to ownership of the listed collateral that may interfere with the secured parties ability to take and profit from the sail of said properties in the event that the above listed debts are not repaid.</p></div>
<div class="footer">
   <img src="tick.svg" alt="">
   <div class="b5">
      Digitally signed and verified.
   </div>
</div>`
}
let collateral_amount="Rs. 100000";
let borrower="Shresth Gupta";
let collateral="Shresth ki CG";
let loan_amount="bandi";
generate_agreement(borrower,collateral,collateral_amount,loan_amount);