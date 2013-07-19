<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Fidelity</title>
    <link type="text/css" rel="stylesheet" href="fidelity.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
    <script src="fidelity.js" type="text/javascript"></script>
  </head>
  <body>
  <div id="header"></div>
  <div id="container">
    <div id="mainMenu">
      <h1>Welcome To The Fidelity Bank Vault.</h1>
      <h3>The Fidelity Bank Vault is a tool containing a collection of Fidelity Bank products and services which allow you to compare and select what's right for you.</h3>
      <p class="pleaseChoose">Please Choose One</p>
      <div id="personalProductsAndServices"><img src="ppsLarge.png" id="ppsLarge" />PERSONAL PRODUCTS AND SERVICES<div id="ppsButton" class="radioButton">&nbsp;</div></div>
      <div id="businessProductsAndServices"><img src="bpsLarge.png" id="bpsLarge" />BUSINESS PRODUCTS AND SERVICES<div id="bpsButton" class="radioButton">&nbsp;</div></div>
      <div id="trustServices"><img src="tsLarge.png" id="tsLarge" />TRUST SERVICES<br /><br /><div id="tsButton" class="radioButton">&nbsp;</div></div>
    </div>
    
    <div id="ppsCategories">
      <img src="ppsSmall.png" id="ppsSmall"/>
      <h1>Personal Products and Services</h1>
      <p class="pleaseChoose" style="margin-bottom: 0px;padding-top: 30px;">Please Choose One</p>
      <div id="ppsChecking" class="category">CHECKING<div id="ppsCheckingCategoryButton" class="radioButton"></div></div>
      <div id="ppsSavings" class="category">SAVINGS<div id="ppsSavingsCategoryButton" class="radioButton"></div></div>
      <div id="ppsLoans" class="category">LOANS<div id="ppsLoansCategoryButton" class="radioButton"></div></div>
      <div id="ppsInvestment" class="category">INVESTMENT<div id="ppsInvestmentCategoryButton" class="radioButton"></div></div>
      <div id="ppsDiscontinued" class="category" style="width: 130px;">DISCONTINUED<br /><span style="font-size: 10px; display: block; width: 135px; color: #666;">(Comparison Purposes Only)</span><div id="ppsDiscontinuedCategoryButton" class="radioButton" style="margin: 0 auto;"></div></div>
      <div id="ppsServices" class="category">SERVICES<div id="ppsServicesCategoryButton" class="radioButton"></div></div>
    </div>
    
    <div id="bpsCategories">
      <img src="bpsSmall.png" id="bpsSmall"/>
      <h1>Business Products and Services</h1>
      <p class="pleaseChoose">Please Choose One</p>
      <div id="bpsChecking" class="category" style="width: 150px;">Business Checking<div id="bpsCheckingCategoryButton" class="radioButton"></div></div>
      <div id="bpsSavings" class="category" style="width: 150px;">Business Savings<div id="bpsSavingsCategoryButton" class="radioButton"></div></div>
      <div id="bpsServices" class="category" style="width: 150px;">Business Services<div id="bpsServicesCategoryButton" class="radioButton"></div></div>
    </div>
    
    <div id="ppsOptionsChecking">
      <img src="ppsSmallest.png" id="ppsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Personal Products and Services</h1>
      <p style="clear: left;color: #00704a;">CHECKING</p>
      <p class="pleaseChoose">Please select at least 1</p>
      <ul style="width: 220px;margin: 0 auto;padding-bottom: 50px;font-size: 14px;">
      <li class="option"><div id="classicChoiceCheckingOption" class="ppsCheckingCheckBox"></div>Classic Choice Checking</li>
      <li class="option"><div id="fidelityChoiceCheckingOption" class="ppsCheckingCheckBox"></div>Fidelity Choice Checking</li>
      <li class="option"><div id="greenChoiceCheckingOption" class="ppsCheckingCheckBox"></div>Green Choice Checking</li>
      <li class="option"><div id="freeCheckingOption" class="ppsCheckingCheckBox"></div>Free Checking</li>
      <li class="option"><div id="freeSeniorCheckingOption" class="ppsCheckingCheckBox"></div>Free Senior Checking</li>
      <li class="option"><div id="freeStudentCheckingOption" class="ppsCheckingCheckBox"></div>Free Student Checking</li>
      </ul>
      
      <div id="ppsCheckingCompareButton"><div id="compareCheckingViewButton" class="radioButton" style="float: left; margin-top: -3px;"></div>COMPARE / VIEW</div>
    </div>
    
    <div id="ppsOptionsSavings">
      <img src="ppsSmallest.png" id="ppsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Personal Products and Services</h1>
      <p style="clear: left;color: #00704a;">SAVINGS</p>
      <p class="pleaseChoose">Please select at least 1</p>
      <ul style="width: 220px;margin: 0 auto;padding-bottom: 50px;font-size: 14px;">
      <li class="option"><div id="advantageMoneyMarketOption" class="ppsSavingsCheckBox"></div>Advantage Money Market</li>
      <li class="option"><div id="allPurposeClubOption" class="ppsSavingsCheckBox"></div>All Purpose Club</li>
      <li class="option"><div id="choiceMoneyMarketOption" class="ppsSavingsCheckBox"></div>Choice Money Market</li>
      <li class="option"><div id="choicePerformanceSavingsOption" class="ppsSavingsCheckBox"></div>Choice Performance Savings</li>
      <li class="option"><div id="christmasClubOption" class="ppsSavingsCheckBox"></div>Christmas Club</li>
      <li class="option"><div id="greenTeamSavingsOption" class="ppsSavingsCheckBox"></div>Green Team Savings</li>
      <li class="option"><div id="moneyMarketOption" class="ppsSavingsCheckBox"></div>Money Market</li>
      <li class="option"><div id="optimumChoiceSavingsOption" class="ppsSavingsCheckBox"></div>Optimum Choice Savings</li>
      <li class="option"><div id="scholarSavingsOption" class="ppsSavingsCheckBox"></div>Scholar Savings</li>
      <li class="option"><div id="statementSavingsOption" class="ppsSavingsCheckBox"></div>Statement Savings</li>
      </ul>
      
      <div id="ppsSavingsCompareButton"><div id="compareSavingsViewButton" class="radioButton" style="float: left; margin-top: -3px;"></div>COMPARE / VIEW</div>
    </div>
    
    <div id="ppsOptionsServices">
      <img src="ppsSmallest.png" id="ppsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Personal Products and Services</h1>
      <p style="clear: left;color: #00704a;">SERVICES</p>
      <p class="pleaseChoose">Please select at least 1</p>
      <ul style="width: 220px;margin: 0 auto;padding-bottom: 50px;font-size: 14px;">
      <li class="option"><div id="cashiersChecksOption" class="ppsServicesCheckBox"></div>Cashier's Checks</li>
      <li class="option"><div id="ezStatementOption" class="ppsServicesCheckBox"></div>EZ Statement</li>
      <li class="option"><div id="fidelityTelephoneLinkOption" class="ppsServicesCheckBox"></div>Fidelity Telephone Link</li>
      <li class="option"><div id="fidelityVisaCheckCardOption" class="ppsServicesCheckBox"></div>Fidelity Visa Check Card</li>
      <li class="option"><div id="mobileMoneyOption" class="ppsServicesCheckBox"></div>Mobile Money</li>
      <li class="option"><div id="moneyOrdersOption" class="ppsServicesCheckBox"></div>Money Orders</li>
      <li class="option"><div id="onlineBankingOption" class="ppsServicesCheckBox"></div>Online Banking</li>
      <li class="option"><div id="overdraftProtectionOption" class="ppsServicesCheckBox"></div>Overdraft Protection</li>
      <li class="option"><div id="popMoneyOption" class="ppsServicesCheckBox"></div>Pop Money</li>
      <li class="option"><div id="webBillPayOption" class="ppsServicesCheckBox"></div>Web Bill Pay</li>
      <li class="option"><div id="wireTransfersOption" class="ppsServicesCheckBox"></div>Wire Transfers</li>
      </ul>
      
      <div id="ppsServicesCompareButton"><div id="compareServicesViewButton" class="radioButton" style="float: left; margin-top: -3px;"></div>COMPARE / VIEW</div>
    </div>
    
    <div id="bpsOptionsChecking">
      <img src="bpsSmallest.png" id="bpsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Business Products and Services</h1>
      <p style="clear: left;color: #00704a;">CHECKING</p>
      <p class="pleaseChoose">Please select at least 1</p>
      <ul style="width: 220px;margin: 0 auto;padding-bottom: 50px;font-size: 14px;">
      <li class="option"><div id="businessAnalysisCheckingOption" class="bpsCheckingCheckBox"></div>Business Analysis Checking</li>
      <li class="option"><div id="businessInterestCheckingOption" class="bpsCheckingCheckBox"></div>Business Interest Checking</li>
      <li class="option"><div id="communityFirstNonProfitCheckingOption" class="bpsCheckingCheckBox"></div>Community First Non Profit Checking</li>
      <li class="option"><div id="fidelityMuniChoiceCheckingOption" class="bpsCheckingCheckBox"></div>Fidelity Muni Choice Checking</li>
      <li class="option"><div id="freeBusinessCheckingOption" class="bpsCheckingCheckBox"></div>Free Business Checking</li>
      <li class="option"><div id="IOLTACheckingOption" class="bpsCheckingCheckBox"></div>IOLTA Checking</li>
      </ul>
      
      <div id="bpsCheckingCompareButton"><div id="compareCheckingViewButton" class="radioButton" style="float: left; margin-top: -3px;"></div>COMPARE / VIEW</div>
    </div>
    
    <div id="bpsOptionsSavings">
      <img src="bpsSmallest.png" id="bpsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Business Products and Services</h1>
      <p style="clear: left;color: #00704a;">SAVINGS</p>
      <p class="pleaseChoose">Please select at least 1</p>
      <ul style="width: 220px;margin: 0 auto;padding-bottom: 50px;font-size: 14px;">
      <li class="option"><div id="businessSavingsOption" class="bpsSavingsCheckBox"></div>Business Savings Account</li>
      <li class="option"><div id="optimumChoiceSavingsOption" class="bpsSavingsCheckBox"></div>Optimum Choice Savings</li>
      </ul>
      
      <div id="bpsSavingsCompareButton"><div id="compareSavingsViewButton" class="radioButton" style="float: left; margin-top: -3px;"></div>COMPARE / VIEW</div>
    </div>
    
    <div id="bpsOptionsServices">
      <img src="bpsSmallest.png" id="bpsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Business Products and Services</h1>
      <p style="clear: left;color: #00704a;">SERVICES</p>
      <p class="pleaseChoose">Please select at least 1</p>
      <ul style="width: 220px;margin: 0 auto;padding-bottom: 50px;font-size: 14px;">
      <li class="option"><div id="fidelityTelephoneLinkOption" class="bpsServicesCheckBox"></div>Fidelity Telephone Link</li>
      <li class="option"><div id="mobileMoneyOption" class="bpsServicesCheckBox"></div>Mobile Money</li>
      <li class="option"><div id="onlineBankingOption" class="bpsServicesCheckBox"></div>Online Banking</li>
      <li class="option"><div id="popMoneyOption" class="bpsServicesCheckBox"></div>Pop Money</li>
      <li class="option"><div id="webBillPayOption" class="bpsServicesCheckBox"></div>Web Bill Pay</li>
      <li class="option"><div id="wireTransfersOption" class="bpsServicesCheckBox"></div>Wire Transfers</li>
      </ul>
      
      <div id="bpsServicesCompareButton"><div id="compareServicesViewButton" class="radioButton" style="float: left; margin-top: -3px;"></div>COMPARE / VIEW</div>
    </div>
    
    <div id="ppsCheckingComparison">
      <img src="ppsSmallest.png" id="ppsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Personal Products and Services</h1><h2 style="float: left;color: #00704a;padding: 10px 20px;">CHECKING</h2>
      
      <table id="ppsCheckingComparisonTable" style="clear: both;">
      
      <tr>
      <th class="accountRequirements">Account Requirements</th>
      <th class="classicChoiceCheckingComparisonInfo">CLASSIC CHOICE CHECKING</th>
      <th class="fidelityChoiceCheckingComparisonInfo">FIDEITY CHOICE CHECKING</th>
      <th class="freeCheckingComparisonInfo">FREE CHECKING</th>
      <th class="freeSeniorCheckingComparisonInfo">FREE SENIOR CHECKING</th>
      <th class="freeStudentCheckingComparisonInfo">FREE STUDENT CHECKING</th>
      <th class="greenChoiceCheckingComparisonInfo">GREEN CHOICE CHECKING</th>
      </tr>
      
      <tr>
        <td class="accountRequirements">Minimum opening deposit</td>
        <td class="classicChoiceCheckingComparisonInfo">$25</td>
        <td class="fidelityChoiceCheckingComparisonInfo">$25</td>
        <td class="freeCheckingComparisonInfo">$25</td>
        <td class="freeSeniorCheckingComparisonInfo">$25</td>
        <td class="freeStudentCheckingComparisonInfo">$25</td>
        <td class="greenChoiceCheckingComparisonInfo">$25</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Balance requirements</td>
        <td class="classicChoiceCheckingComparisonInfo">$2,500 minimum daily balance contained within a Fidelity Choice Checking account and any savings accounts, Money Market accounts, CDs, Consumer Loans, Home Equity Loans or Lines of Credit</td>
        <td class="fidelityChoiceCheckingComparisonInfo">$10,000 minimum daily balance contained within a Fidelity Choice Checking and any Savings accounts, Money Market accounts, CDs, Consumer Loans, Home Equity Loans or Lines of Credit</td>
        <td class="freeCheckingComparisonInfo">$0</td>
        <td class="freeSeniorCheckingComparisonInfo">$0</td>
        <td class="freeStudentCheckingComparisonInfo">$2,500 minimum daily balance contained within a Green Choice Checking account and any savings accounts, Money Market accounts, CDs, Consumer Loans, Home Equity Loans or Lines of Credit</td>
        <td class="greenChoiceCheckingComparisonInfo">$0</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Monthly service charge</td>
        <td class="classicChoiceCheckingComparisonInfo">$20 if balance falls below requirement</td>
        <td class="fidelityChoiceCheckingComparisonInfo">$25 if balance falls below requirement</td>
        <td class="greenChoiceCheckingComparisonInfo">$0</td>
        <td class="freeSeniorCheckingComparisonInfo">$0</td>
        <td class="freeStudentCheckingComparisonInfo">$10 if balance falls below requirement</td>
        <td class="freeCheckingComparisonInfo">$0</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Interest paid on account</td>
        <td class="classicChoiceCheckingComparisonInfo">No minimum balance required. Interest is compounded and credited to the account monthly.</td>
        <td class="fidelityChoiceCheckingComparisonInfo">No minimum balance required. Interest is compounded and credited to the account monthly.</td>
        <td class="freeCheckingComparisonInfo">N/A</td>
        <td class="freeSeniorCheckingComparisonInfo">N/A</td>
        <td class="freeStudentCheckingComparisonInfo">N/A</td>
        <td class="greenChoiceCheckingComparisonInfo">N/A</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Certificate of Deposit rate bonuses</td>
        <td class="classicChoiceCheckingComparisonInfo">+0.25 bonus on new CD/IRAs</td>
        <td class="fidelityChoiceCheckingComparisonInfo">+0.25 bonus on new CD/IRAs</td>
        <td class="freeCheckingComparisonInfo">N/A</td>
        <td class="freeSeniorCheckingComparisonInfo">N/A</td>
        <td class="freeStudentCheckingComparisonInfo">+0.25 bonus on new CD/IRAs</td>
        <td class="greenChoiceCheckingComparisonInfo">N/A</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Consumer and Home Equity Loan Discount</td>
        <td class="classicChoiceCheckingComparisonInfo">Reduced rate available when loan payment is automatically deducted from a Classic Choice Checking account.</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Reduced rate available when loan payment is automatically deducted from Fidelity checking account.</td>
        <td class="freeCheckingComparisonInfo">Reduced rate available when loan payment is automatically deducted from Fidelity checking account.</td>
        <td class="freeSeniorCheckingComparisonInfo">Reduced rate available when loan payment is automatically deducted from Fidelity checking account.</td>
        <td class="freeStudentCheckingComparisonInfo">Reduced rate available when loan payment is automatically deducted from Fidelity checking account.</td>
        <td class="greenChoiceCheckingComparisonInfo">Reduced rate available when loan payment is automatically deducted from Fidelity checking account.</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Fidelity Visa Check Card</td>
        <td class="classicChoiceCheckingComparisonInfo">Fee waived</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Fee waived</td>
        <td class="freeCheckingComparisonInfo">$1.00/month</td>
        <td class="freeSeniorCheckingComparisonInfo">$1.00/month</td>
        <td class="freeStudentCheckingComparisonInfo">Fee waived</td>
        <td class="greenChoiceCheckingComparisonInfo">$1.00/month</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Bonus Rewards on check card</td>
        <td class="classicChoiceCheckingComparisonInfo">N/A</td>
        <td class="fidelityChoiceCheckingComparisonInfo">N/A</td>
        <td class="freeCheckingComparisonInfo">N/A</td>
        <td class="freeSeniorCheckingComparisonInfo">N/A</td>
        <td class="freeStudentCheckingComparisonInfo">N/A</td>
        <td class="greenChoiceCheckingComparisonInfo">N/A</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Fidelity fee for withdrawals at other bank ATMs</td>
        <td class="classicChoiceCheckingComparisonInfo">Two (2) charges reimbursed per calendar month per check card holder.</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Two (2) charges reimbursed per calendar month per check card holder.</td>
        <td class="freeCheckingComparisonInfo">$1.00/transaction</td>
        <td class="freeSeniorCheckingComparisonInfo">Waived</td>
        <td class="freeStudentCheckingComparisonInfo">Two (2) charges reimbursed per calendar month per check card holder.</td>
        <td class="greenChoiceCheckingComparisonInfo">$1.00/transaction</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Other bank ATM withdrawal fee</td>
        <td class="classicChoiceCheckingComparisonInfo">Two (2) charges reimbursed per calendar month per check card holder (other bank's fees may apply)</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Two (2) charges reimbursed per calendar month per check card holder (other bank's fees may apply)</td>
        <td class="freeCheckingComparisonInfo">Apply</td>
        <td class="freeSeniorCheckingComparisonInfo">Apply</td>
        <td class="freeStudentCheckingComparisonInfo">Two (2) charges reimbursed per calendar month per check card holder (other bank's fees may apply)</td>
        <td class="greenChoiceCheckingComparisonInfo">Apply</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Discounted checks</td>
        <td class="classicChoiceCheckingComparisonInfo">Free specialty "Wallet" style checks or 50% off all other "Wallet" check styles.</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Free 50 Welcome Package of checks</td>
        <td class="freeCheckingComparisonInfo">N/A</td>
        <td class="freeSeniorCheckingComparisonInfo">Free 25 Welcome Package of checks</td>
        <td class="freeStudentCheckingComparisonInfo">Free 25 Welcome Package of checks</td>
        <td class="greenChoiceCheckingComparisonInfo">Specialty checks free and 50% off all others</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Online Banking w/ free Web Bill Pay and Quicken Interface</td>
        <td class="classicChoiceCheckingComparisonInfo">Free when at least two (2) bills per month are paid online</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Free when at least two (2) bills per month are paid online</td>
        <td class="freeCheckingComparisonInfo">Free when at least two (2) bills per month are paid online</td>
        <td class="freeSeniorCheckingComparisonInfo">Free when at least two (2) bills per month are paid online</td>
        <td class="freeStudentCheckingComparisonInfo">Free when at least two (2) bills per month are paid online</td>
        <td class="greenChoiceCheckingComparisonInfo">Free when at least two (2) bills per month are paid online</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">EZ Statements</td>
        <td class="classicChoiceCheckingComparisonInfo">Optional</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Optional</td>
        <td class="freeCheckingComparisonInfo">Optional</td>
        <td class="freeSeniorCheckingComparisonInfo">Optional</td>
        <td class="freeStudentCheckingComparisonInfo">Required</td>
        <td class="greenChoiceCheckingComparisonInfo">Optional</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Other personal account with no monthly service fees or balance requirement</td>
        <td class="classicChoiceCheckingComparisonInfo">One (1) Savings Account</td>
        <td class="fidelityChoiceCheckingComparisonInfo">One (1) Savings Account</td>
        <td class="freeCheckingComparisonInfo">N/A</td>
        <td class="freeSeniorCheckingComparisonInfo">Free</td>
        <td class="freeStudentCheckingComparisonInfo">One (1) Savings Account</td>
        <td class="greenChoiceCheckingComparisonInfo">N/A</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Overdraft Protection</td>
        <td class="classicChoiceCheckingComparisonInfo">No set up or transfer fee.</td>
        <td class="fidelityChoiceCheckingComparisonInfo">No set up or transfer fee.</td>
        <td class="freeCheckingComparisonInfo">Set up fee = $15.00<br />Transfer fee = $10.00</td>
        <td class="freeSeniorCheckingComparisonInfo">Set up fee = $15.00<br />Transfer fee = $10.00</td>
        <td class="freeStudentCheckingComparisonInfo">No set up or transfer fee.</td>
        <td class="greenChoiceCheckingComparisonInfo">Set up fee = $15.00<br />Transfer fee = $10.00</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Direct Deposit</td>
        <td class="classicChoiceCheckingComparisonInfo">Recommended for more immediate funds availability.</td>
        <td class="fidelityChoiceCheckingComparisonInfo">Recommended for more immediate funds availability.</td>
        <td class="freeCheckingComparisonInfo">Recommended for more immediate funds availability.</td>
        <td class="freeSeniorCheckingComparisonInfo">Recommended for more immediate funds availability</td>
        <td class="freeStudentCheckingComparisonInfo">Recommended for more immediate funds availability.</td>
        <td class="greenChoiceCheckingComparisonInfo">N/A</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Other Features</td>
        <td class="classicChoiceCheckingComparisonInfo">1. $10 stop payments (reduced fee)<br />2. $300 off closing costs on Mortgage Loans<br />3. Free check imaging available<br />4. First year free and 50% discount annually thereafter on Safe Deposit Box<br />5. Free Personal Wealth Management Consultation<br />6. No charge for money orders and cashiers checks</td>
        <td class="fidelityChoiceCheckingComparisonInfo">1. $10 stop payments (reduced fee)<br />2. $300 off closing costs on Mortgage Loans<br />3. Free check imaging available<br />4. First year free and 50% discount annually thereafter on Safe Deposit Box<br />5. Free Personal Wealth Management Consultation<br />6. No charge for money orders and cashiers checks</td>
        <td class="freeCheckingComparisonInfo"></td>
        <td class="freeSeniorCheckingComparisonInfo"></td>
        <td class="freeStudentCheckingComparisonInfo">1. $10 stop payments (reduced fee)<br />2. $300 off closing costs on Mortgage Loans<br />3. Free check imaging available<br />4. First year free and 50% discount annually thereafter on Safe Deposit Box<br />5. Free Personal Wealth Management Consultation<br />6. No charge for money orders and cashiers checks</td>
        <td class="greenChoiceCheckingComparisonInfo"></td>
      </tr>
      
      <tr>
        <td></td>
        <td class="classicChoiceCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="fidelityChoiceCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="freeCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="freeSeniorCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="freeStudentCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="greenChoiceCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
      </tr>
    </table>
    </div>
    
    <div id="ppsSavingsComparison">
      <img src="ppsSmallest.png" id="ppsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Personal Products and Services</h1><h2 style="float: left;color: #00704a;padding: 10px 20px;">SAVINGS</h2>
      
      <table id="ppsSavingsComparisonTable" style="clear: both;">
      
      <tr>
      <th class="accountRequirements">Account Requirements</th>
      <th class="advantageMoneyMarketComparisonInfo">Advantage Money Market</th>
      <th class="allPurposeClubComparisonInfo">All Purpose Club</th>
      <th class="choiceMoneyMarketComparisonInfo">Choice Money Market</th>
      <th class="choicePerformanceSavingsComparisonInfo">Choice Performance Savings</th>
      <th class="christmasClubComparisonInfo">Christmas Club</th>
      <th class="greenTeamSavingsComparisonInfo">Green Team Savings</th>
      <th class="moneyMarketComparisonInfo">Money Market</th>
      <th class="optimumChoiceSavingsComparisonInfo">Optimum Choice Savings</th>
      <th class="statementSavingsComparisonInfo">Statement Savings</th>
      <th class="scholarSavingsComparisonInfo">Scholar Savings</th>
      </tr>
      
      <tr>
        <td class="accountRequirements">Minimum opening deposit</td>
        <td class="advantageMoneyMarketComparisonInfo">$2,500</td>
        <td class="allPurposeClubComparisonInfo">$5.00</td>
        <td class="choiceMoneyMarketComparisonInfo">$2,500</td>
        <td class="choicePerformanceSavingsComparisonInfo">A deposit of at least $5,000 not currently on deposit with Fidelity Bank.</td>
        <td class="christmasClubComparisonInfo">$1.00</td>
        <td class="greenTeamSavingsComparisonInfo">$1.00</td>
        <td class="moneyMarketComparisonInfo">$1,000</td>
        <td class="optimumChoiceSavingsComparisonInfo">$100.00</td>
        <td class="statementSavingsComparisonInfo">$100.00</td>
        <td class="scholarSavingsComparisonInfo">$25.00</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Balance requirements needed to avoid service charges</td>
        <td class="advantageMoneyMarketComparisonInfo">$2,500 to obtain the Annual Percentage Yield (APY)*</td>
        <td class="allPurposeClubComparisonInfo">N/A</td>
        <td class="choiceMoneyMarketComparisonInfo">$2,500 to obtain the Annual Percentage Yield (APY)*</td>
        <td class="choicePerformanceSavingsComparisonInfo">$5,000 to obtain the APY*</td>
        <td class="christmasClubComparisonInfo">N/A</td>
        <td class="greenTeamSavingsComparisonInfo">$1.01 to obtain APY*</td>
        <td class="moneyMarketComparisonInfo">$2,500 to obtain the Annual Percentage Yield (APY)*</td>
        <td class="optimumChoiceSavingsComparisonInfo">$100.00 to obtain the APY*</td>
        <td class="statementSavingsComparisonInfo">$100.00 to obtain the APY*</td>
        <td class="scholarSavingsComparisonInfo">$50.00 to obtain APY*</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Monthly service charge</td>
        <td class="advantageMoneyMarketComparisonInfo">$2,500 and Over - $0<br />Below $2,500 - $15.00</td>
        <td class="allPurposeClubComparisonInfo">N/A</td>
        <td class="choiceMoneyMarketComparisonInfo">$2,500 and Over - $0<br />Below $2,500 - $15.00</td>
        <td class="choicePerformanceSavingsComparisonInfo">$2,500 and over = $0<br />$0.00 to $2,499.99 = $15.00</td>
        <td class="christmasClubComparisonInfo">$0.00</td>
        <td class="greenTeamSavingsComparisonInfo">$0</td>
        <td class="moneyMarketComparisonInfo">$2,500 and Over - $0<br />Below $2,500 - $15.00</td>
        <td class="optimumChoiceSavingsComparisonInfo">$100 and over = $0<br />$0.00 to $99.99 = $2.00</td>
        <td class="statementSavingsComparisonInfo">$100 and over = $0<br />$0.00 to $99.99 = $2.00</td>
        <td class="scholarSavingsComparisonInfo">$0</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Interest paid on account</td>
        <td class="advantageMoneyMarketComparisonInfo">Yes. Interest compounded and credited to account monthly.</td>
        <td class="allPurposeClubComparisonInfo">Yes. Simple interest credited to the account at maturity.</td>
        <td class="choiceMoneyMarketComparisonInfo">Yes. Interest compounded and credited to account monthly.</td>
        <td class="choicePerformanceSavingsComparisonInfo">Yes. Interest compounded and credited to account quarterly.</td>
        <td class="christmasClubComparisonInfo">Yes. Simple interest credited to the account at maturity.</td>
        <td class="greenTeamSavingsComparisonInfo">Yes. Interest is compounded and credited to the account quarterly.</td>
        <td class="moneyMarketComparisonInfo">Yes. Interest compounded and credited to account monthly.</td>
        <td class="optimumChoiceSavingsComparisonInfo">Yes. Interest compounded and credited to account quarterly.</td>
        <td class="statementSavingsComparisonInfo">Yes. Interest compounded and credited to account quarterly.</td>
        <td class="scholarSavingsComparisonInfo">Yes. Interest is compounded and credited to the account quarterly.</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Statement cycle</td>
        <td class="advantageMoneyMarketComparisonInfo">Monthly</td>
        <td class="allPurposeClubComparisonInfo">None</td>
        <td class="choiceMoneyMarketComparisonInfo">Monthly</td>
        <td class="choicePerformanceSavingsComparisonInfo">Quarterly</td>
        <td class="christmasClubComparisonInfo">None</td>
        <td class="greenTeamSavingsComparisonInfo">Quarterly</td>
        <td class="moneyMarketComparisonInfo">Monthly</td>
        <td class="optimumChoiceSavingsComparisonInfo">Quarterly</td>
        <td class="statementSavingsComparisonInfo">Quarterly</td>
        <td class="scholarSavingsComparisonInfo">Quarterly</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Eligibility</td>
        <td class="advantageMoneyMarketComparisonInfo">Any</td>
        <td class="allPurposeClubComparisonInfo">Any</td>
        <td class="choiceMoneyMarketComparisonInfo">Any Fidelity Choice Banking customer</td>
        <td class="choicePerformanceSavingsComparisonInfo">N/A</td>
        <td class="christmasClubComparisonInfo">Any</td>
        <td class="greenTeamSavingsComparisonInfo">Open to any child 18 years of age and younger.</td>
        <td class="moneyMarketComparisonInfo">Any</td>
        <td class="optimumChoiceSavingsComparisonInfo">Any personal or business customer</td>
        <td class="scholarSavingsComparisonInfo">Youth, high school and college students up to age 23.</td>
        <td class="statementSavingsComparisonInfo">Any personal or business customer</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Special Notes</td>
        <td class="advantageMoneyMarketComparisonInfo">Fees may reduce earnings.<br />Rate may change at any time, including after account is opened.<br />*APY - Annual Percentage Yield<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.</td>
        <td class="allPurposeClubComparisonInfo">Term is 52 weeks<br />Early withdraw penalty is the greater of $5.00 or seven (7) days interest on the amount withdrawn</td>
        <td class="choiceMoneyMarketComparisonInfo">Fees may reduce earnings.<br />Rate may change at any time, including after account is opened.<br />*APY - Annual Percentage Yield<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.<br /><sup>1</sup> Fidelity Choice Banking is defined as a Fidelity, Classic or Green Choice Checking account.</td>
        <td class="choicePerformanceSavingsComparisonInfo">Fees may reduce earnings.<br />Rate may change at any time, including after account is opened.<br />*APY - Annual Percentage Yield<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.</td>
        <td class="christmasClubComparisonInfo">Term is 50 weeks<br />Early withdraw penalty is the greater of $5.00 or seven (7) days interest on the amount withdrawn</td>
        <td class="greenTeamSavingsComparisonInfo">*APY (Annual Percentage Yield)<br />Rate may change at any time, including after account is opened.<br />Any child that opens a new Green Team Savings Account will receive a free piggy bank as well as invitations to exclusive Green Team events throughout the year.<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.</td>
        <td class="moneyMarketComparisonInfo">Fees may reduce earnings.<br />Rate may change at any time, including after account is opened.<br />*APY - Annual Percentage Yield<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.</td>
        <td class="optimumChoiceSavingsComparisonInfo">Fees may reduce earnings.<br />Rate may change at any time, including after account is opened.<br />*APY - Annual Percentage Yield<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.</td>
        <td class="scholarSavingsComparisonInfo">Fidelity ATM Card is available at no monthly charge. Quick Cash ATM Card can be used anywhere in the world where the Quick Cash logo is displayed.<br />We never charge scholar account holders for using ATMs not owned or operated by us, however, other banks may charge a fee.<br />Fees may reduce earnings.<br />Rate may change at any time, including after account is opened.<br />*APY - Annual Percentage Yield<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.</td>
        <td class="statementSavingsComparisonInfo">Fees may reduce earnings.<br />Rate may change at any time, including after account is opened.<br />*APY - Annual Percentage Yield<br />Regulation D Transaction Limitations – Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers from your account per calendar month.</td>
      </tr>
      
      <tr>
        <td></td>
        <td class="advantageMoneyMarketComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="allPurposeClubComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="choiceMoneyMarketComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="choicePerformanceSavingsComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="christmasClubComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="greenTeamSavingsComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="moneyMarketComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="optimumChoiceSavingsComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="scholarSavingsComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="statementSavingsComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
      </tr>
    </table>
    </div>
    
    <div id="ppsServicesComparison">
      <img src="ppsSmallest.png" id="ppsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Personal Products and Services</h1><h2 style="float: left;color: #00704a;padding: 10px 20px;">SERVICES</h2>
      
      <table id="ppsServicesComparisonTable" style="clear: both;">
      
      <tr>
        <th class="accountRequirements">Account Requirements</th>
        <th class="cashiersChecksComparisonInfo">Cashier's Checks</th>
        <th class="ezStatementComparisonInfo">EZ Statement</th>
        <th class="fidelityTelephoneLinkComparisonInfo">Fidelity Telephone Link</th>
        <th class="fidelityVisaCheckCardComparisonInfo">Fidelity Visa Check Card</th>
        <th class="mobileMoneyComparisonInfo">Mobile Money</th>
        <th class="moneyOrdersComparisonInfo">Money Orders</th>
        <th class="onlineBankingComparisonInfo">Online Banking</th>
        <th class="overdraftProtectionComparisonInfo">Overdraft Protection</th>
        <th class="popMoneyComparisonInfo">Pop Money</th>
        <th class="webBillPayComparisonInfo">Web Bill Pay</th>
        <th class="wireTransfersComparisonInfo">Wire Transfers</th>
      </tr>
      
      <tr>
        <td class="accountRequirements">Fees</td>
        <td class="cashiersChecksComparisonInfo">$10 per check; waived on all Fidelity Choice Banking accounts.</td>
        <td class="ezStatementComparisonInfo">None. Required on Green Choice Checking accounts.</td>
        <td class="fidelityTelephoneLinkComparisonInfo">Stop Payment Request- Fidelity Telephone Link - $10 per request.</td>
        <td class="fidelityVisaCheckCardComparisonInfo">$1 per month; waived on all Fidelity Choice Banking accounts.</td>
        <td class="mobileMoneyComparisonInfo">None; Cell phone providers may charge additional fees for web access and/ or text messaging.</td>
        <td class="moneyOrdersComparisonInfo">$5 per order. Waived on all Fidelity Choice Banking accounts.</td>
        <td class="onlineBankingComparisonInfo">None</td>
        <td class="overdraftProtectionComparisonInfo">$15 set up; $10 per transfer. Waived on all Fidelity Choice Banking accounts.</td>
        <td class="popMoneyComparisonInfo">$0.50 per transaction (Transfers)<br />$0- $249.99 &nbsp;&nbsp;-&nbsp;&nbsp; $0.50 per request (Request Money)<br />$250- $999.99 &nbsp;&nbsp;-&nbsp;&nbsp; $0.75 per request<br />$1,000 and up &nbsp;&nbsp;-&nbsp;&nbsp; $1.50 per request</td>
        <td class="webBillPayComparisonInfo">$6 per month per user for personal accounts;<br />Free when at least two (2) bills per month are paid online.</td>
        <td class="wireTransfersComparisonInfo">$15 per request plus related fees (Incoming)<br />$30 per request (Domestic Outgoing)<br />$45 per request plus related fees (Foreign Outgoing)</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Eligibility</td>
        <td class="cashiersChecksComparisonInfo">Any customer</td>
        <td class="ezStatementComparisonInfo">Any customer enrolled in online banking</td>
        <td class="fidelityTelephoneLinkComparisonInfo">Any customer</td>
        <td class="fidelityVisaCheckCardComparisonInfo">Any customer with any checking account.</td>
        <td class="mobileMoneyComparisonInfo">Any customer enrolled in Online Banking.</td>
        <td class="moneyOrdersComparisonInfo">Any customer</td>
        <td class="onlineBankingComparisonInfo">Any customer</td>
        <td class="overdraftProtectionComparisonInfo">Any customer with any deposit account.</td>
        <td class="popMoneyComparisonInfo">Any customer enrolled in Online Banking and Web Bill Pay.</td>
        <td class="webBillPayComparisonInfo">Any customer enrolled in online banking</td>
        <td class="wireTransfersComparisonInfo">Any customer</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Special Notes</td>
        <td class="cashiersChecksComparisonInfo">N/A</td>
        <td class="ezStatementComparisonInfo">N/A</td>
        <td class="fidelityTelephoneLinkComparisonInfo">N/A</td>
        <td class="fidelityVisaCheckCardComparisonInfo">
            <table><tr><td>Non Fidelity Bank ATM Usage</td><td>Two (2) charges reimbursed per month per check card holder on all Fidelity Choice Banking accounts; waived on Free Student Checking accounts and Scholar Savings accounts.</td></tr>
            <tr><td>International Purchases and Cash Advances</td><td>3% of transaction amount</td></tr>
            <tr><td>Loan Payment made by credit/ debit card</td><td>$15 per payment</td></tr>
            <tr><td>Replacement Fee</td><td>$5 per request</td></tr></table>
        </td>
        <td class="mobileMoneyComparisonInfo">Mobile Devices Supported - Operating systems including Apple, Android, iOS, Symbian, Windows Mobile, Linux, Palm webOS and Maemo.</td>
        <td class="moneyOrdersComparisonInfo">N/A</td>
        <td class="onlineBankingComparisonInfo">N/A</td>
        <td class="overdraftProtectionComparisonInfo">N/A</td>
        <td class="popMoneyComparisonInfo">N/A</td>
        <td class="webBillPayComparisonInfo">N/A</td>
        <td class="wireTransfersComparisonInfo">N/A</td>
      </tr>
      
    </table>
    </div>
    
    <div id="bpsCheckingComparison">
      <img src="bpsSmallest.png" id="bpsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Business Products and Services</h1><h2 style="float: left;color: #00704a;padding: 10px 20px;">CHECKING</h2>
      
      <table id="bpsCheckingComparisonTable" style="clear: both;">
      
      <tr>
      <th class="accountRequirements">Account Requirements</th>
      <th class="businessAnalysisCheckingComparisonInfo">Business Analysis Checking</th>
      <th class="businessInterestCheckingComparisonInfo">Business Interest Checking</th>
      <th class="communityFirstNonProfitCheckingComparisonInfo">Community First Non Profit Checking</th>
      <th class="fidelityMuniChoiceCheckingComparisonInfo">Fidelity Muni Choice Checking</th>
      <th class="freeBusinessCheckingComparisonInfo">Free Business Checking</th>
      <th class="IOLTACheckingComparisonInfo">IOLTA Checking</th>
      </tr>
      
      <tr>
        <td class="accountRequirements">Minimum daily balance</td>
        <td class="businessAnalysisCheckingComparisonInfo">No minimum daily balance required</td>
        <td class="businessInterestCheckingComparisonInfo">$2,500</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">None</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">$2,500</td>
        <td class="freeBusinessCheckingComparisonInfo">No minimum daily balance required</td>
        <td class="IOLTACheckingComparisonInfo">None</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Monthly service charge</td>
        <td class="businessAnalysisCheckingComparisonInfo">$10</td>
        <td class="businessInterestCheckingComparisonInfo">$10 (if balance falls below requirement.)</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">None</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">None</td>
        <td class="freeBusinessCheckingComparisonInfo">None</td>
        <td class="IOLTACheckingComparisonInfo">None</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Minimum to open</td>
        <td class="businessAnalysisCheckingComparisonInfo">$1,000</td>
        <td class="businessInterestCheckingComparisonInfo">$100</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">$100</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">$100</td>
        <td class="freeBusinessCheckingComparisonInfo">$100</td>
        <td class="IOLTACheckingComparisonInfo">$100</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Interest paid on account</td>
        <td class="businessAnalysisCheckingComparisonInfo">N/A</td>
        <td class="businessInterestCheckingComparisonInfo">Yes. Must maintain an average daily balance of at least $2,500.</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">Yes. Must maintain an average daily balance of at least $2,500.</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">Yes. Rates are tiered according to balances.</td>
        <td class="freeBusinessCheckingComparisonInfo">N/A</td>
        <td class="IOLTACheckingComparisonInfo">Yes. Must maintain an average daily balance of at least $2,500.</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Transaction limits</td>
        <td class="businessAnalysisCheckingComparisonInfo">None. Per item costs apply.</td>
        <td class="businessInterestCheckingComparisonInfo">$0.40 per transaction over 350</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">None</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">None</td>
        <td class="freeBusinessCheckingComparisonInfo">$0.40 per transaction over 350</td>
        <td class="IOLTACheckingComparisonInfo">None</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Statement cycle</td>
        <td class="businessAnalysisCheckingComparisonInfo">Monthly</td>
        <td class="businessInterestCheckingComparisonInfo">Monthly</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">Monthly</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">Monthly</td>
        <td class="freeBusinessCheckingComparisonInfo">Monthly; EZ Statements required</td>
        <td class="IOLTACheckingComparisonInfo">Monthly</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Eligibility</td>
        <td class="businessAnalysisCheckingComparisonInfo">Any corporate business</td>
        <td class="businessInterestCheckingComparisonInfo">Any sole proprietorship</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">Available to non-profit organizations, businesses and groups.</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">Any municipality, public entity or government agency</td>
        <td class="freeBusinessCheckingComparisonInfo">Any corporate business</td>
        <td class="IOLTACheckingComparisonInfo">Account is opened at the request of lawyer.</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Per item costs</td>
        <td class="businessAnalysisCheckingComparisonInfo">Checks drawn- $0.20 ea.<br />Deposit tickets- $0.40 ea.<br />Domestic Outgoing Wire Transfers- $30.00<br />Overdrafts- $35.00<br />Stop payment requests- $10.00</td>
        <td class="businessInterestCheckingComparisonInfo">Checks drawn- $0.20 ea.<br />Deposit tickets- $0.40 ea.<br />Domestic Outgoing Wire Transfers- $30.00<br />Overdrafts- $35.00<br />Paper statements- $3.00 ea.<br />Stop payment requests- $10.00</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">Checks drawn- $0.20 ea.<br />Deposit tickets- $0.40 ea.<br />Domestic Outgoing Wire Transfers- $30.00<br />Overdrafts- $35.00<br />Paper statements- $3.00 ea.<br />Stop payment requests- $10.00<br />Uncollected funds- $35.00</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo">Deposit tickets- $0.40 ea.<br />Domestic Outgoing Wire Transfers- $30.00<br />Overdrafts- $35.00<br />Paper statements- $3.00 ea.<br />Stop payment requests- $10.00</td>
        <td class="freeBusinessCheckingComparisonInfo">Overdrafts- $35.00<br />Stop payment requests- $10.00<br />Domestic Outgoing Wire Transfers- $30.00<br />Paper statements- $3.00</td>
        <td class="IOLTACheckingComparisonInfo">Checks drawn- $0.20 ea.<br />Deposit tickets- $0.40 ea.<br />Domestic Outgoing Wire Transfers- $30.00<br />Overdrafts- $35.00<br />Paper statements- $3.00 ea.<br />Stop payment requests- $10.00<br />Uncollected funds- $35.00</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Services offered</td>
        <td class="businessAnalysisCheckingComparisonInfo">Cash Management<br />Fidelity at Work<br />Fidelity Visa Check Card<br />Free Online Banking<br />Free Personal Wealth Management Consultation<br />Web Bill Pay</td>
        <td class="businessInterestCheckingComparisonInfo">Cash Management<br />Fidelity at Work<br />Fidelity Visa ® Check Card<br />Free Online Banking<br />Free Personal Wealth Management Consultation<br />Free Remote Deposit *<br />Web Bill Pay **</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo">Cash Management<br />Fidelity at Work<br />Fidelity Visa ® Check Card<br />Free 1st order of checks (up to $75)<br />Free Online Banking<br />Free Personal Wealth Management Consultation<br />Free Remote Deposit *<br />Web Bill Pay **<br /><br />* $25,000 average balance required<br />** Free when at least two (2) bills per month are paid online</td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo"></td>
        <td class="freeBusinessCheckingComparisonInfo">Free Online Banking<br />Free Personal Wealth Management<br />Free Remote Deposit*<br />Web Bill Pay**</td>
        <td class="IOLTACheckingComparisonInfo">Cash Management<br />Fidelity at Work<br />Fidelity Visa ® Check Card<br />Free Online Banking<br />Free Personal Wealth Management Consultation<br />Free Remote Deposit *<br />Web Bill Pay **<br /><br />* $25,000 average balance required<br />** Free when at least two (2) bills per month are paid online</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Special notes</td>
        <td class="businessAnalysisCheckingComparisonInfo">Open a Personal Choice Banking Relationship account and receive $300.00 off mortgage fees, preferred rates on deposits and loans and much more.<br />* $25,000 average balance required<br />** Free when at least two (2) bills are paid online per month</td>
        <td class="businessInterestCheckingComparisonInfo">Open a Personal Choice Banking Relationship account and receive $300.00 off mortgage fees, preferred rates on deposits and loans and much more.<br />* $25,000 average balance required<br />** Free when at least two (2) bills are paid online per month</td>
        <td class="communityFirstNonProfitCheckingComparisonInfo"></td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo"></td>
        <td class="freeBusinessCheckingComparisonInfo">Open a Personal Choice Banking account and receive $300.00 off mortgage fees, preferred rates on deposits and loans and much more.<br />* $25,000 average balance required<br />** Free when at least two (2) bills per month are paid online.</td>
        <td class="IOLTACheckingComparisonInfo"></td>
      </tr>
      
      <tr>
        <td></td>
        <td class="businessAnalysisCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="businessInterestCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="communityFirstNonProfitCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="fidelityMuniChoiceCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="freeBusinessCheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="IOLTACheckingComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
      </tr>
    </table>
    </div>
    
    <div id="bpsSavingsComparison">
      <img src="bpsSmallest.png" id="bpsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Business Products and Services</h1><h2 style="float: left;color: #00704a;padding: 10px 20px;">SAVINGS</h2>
      
      <table id="bpsSavingsComparisonTable" style="clear: both;">
      
      <tr>
      <th class="accountRequirements">Account Requirements</th>
      <th class="businessSavingsAccountComparisonInfo">Business Savings Account</th>
      <th class="optimumChoiceSavingsComparisonInfo">Optimum Choice Savings</th>
      </tr>
      
      <tr>
        <td class="accountRequirements">Minimum daily balance</td>
        <td class="businessSavingsAccountComparisonInfo">$100.00</td>
        <td class="optimumChoiceSavingsComparisonInfo">$100.00</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Monthly service charge</td>
        <td class="businessSavingsAccountComparisonInfo">$2.00 if monthly balance falls below $100.</td>
        <td class="optimumChoiceSavingsComparisonInfo">$2.00 if monthly balance falls below $100.</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Minimum to open</td>
        <td class="businessSavingsAccountComparisonInfo">$100</td>
        <td class="optimumChoiceSavingsComparisonInfo">$25,000.00 in new money is required for customers who do not already have an account with Fidelity Bank.<sup>1</sup><br />Existing customers of Fidelity Bank may open the account with no less than $5,000 of the $25,000 in new money.</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Interest paid on account</td>
        <td class="businessSavingsAccountComparisonInfo">Yes. Interest compounded and credited to account monthly on balances that are $100 or greater.</td>
        <td class="optimumChoiceSavingsComparisonInfo">Yes. Interest compounded and credited to account monthly on balances that are $100 or greater.</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Check limit per cycle</td>
        <td class="businessSavingsAccountComparisonInfo">Regulation D Transaction Limitations apply<sup>1</sup></td>
        <td class="optimumChoiceSavingsComparisonInfo">Regulation D Transaction Limitations apply<sup>1</sup></td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Statement cycle</td>
        <td class="businessSavingsAccountComparisonInfo">Quarterly</td>
        <td class="optimumChoiceSavingsComparisonInfo">Quarterly</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Eligibility</td>
        <td class="businessSavingsAccountComparisonInfo">Business</td>
        <td class="optimumChoiceSavingsComparisonInfo">Personal and Business<br />A Fidelity Bank checking account (new or existing) is also required with the Optimum Choice Savings account.<sup>2</sup></td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Per item costs</td>
        <td class="businessSavingsAccountComparisonInfo">None</td>
        <td class="optimumChoiceSavingsComparisonInfo">None</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Services offered</td>
        <td class="businessSavingsAccountComparisonInfo">Fidelity at Work<br />Fidelity Visa® Check Card<br />Free Online Banking<br />Free Personal Wealth Management Consultation<br />Free Remote Deposit *<br />Web Bill Pay **</td>
        <td class="optimumChoiceSavingsComparisonInfo">Fidelity at Work<br />Fidelity Visa® Check Card<br />Free Online Banking<br />Free Personal Wealth Management Consultation<br />Free Remote Deposit *<br />Web Bill Pay **</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Special notes</td>
        <td class="businessSavingsAccountComparisonInfo"><sup>1</sup> Regulation D Transaction Limitations –  Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers per calendar month.<br />* $25,000 average balance required<br />**Free when at least two (2) bills are paid online per month</td>
        <td class="optimumChoiceSavingsComparisonInfo"><sup>1</sup> Regulation D Transaction Limitations –  Preauthorized transfers including Electronic Fund Transfers, Overdraft Protection using a savings account, check, draft, debit card, point-of-sale or similar order made to a third party are limited to six (6) transfers per calendar month.<br />2 "New” money is defined as money which is not currently on deposit with Fidelity Bank. Money that is transferred from an existing Fidelity Bank account is not considered new money.<br />* $25,000 average balance required<br />** Free when at least two (2) bills are paid online per month</td>
      </tr>
      
      <tr>
        <td></td>
        <td class="businessSavingsAccountComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
        <td class="optimumChoiceSavingsComparisonInfo openAccount"><a href="https://fidelitybank.andera.com/index.cfm?fiid=F9FD6DF6468842CABA9B8B084A01D60D">Open an Account Now!</a></td>
      </tr>
    </table>
    </div>
    
    <div id="bpsServicesComparison">
      <img src="bpsSmallest.png" id="bpsSmallest" style="float: left;padding-left: 150px;padding-right: 10px;"/>
      <h1 style="float: left;">Business Products and Services</h1><h2 style="float: left;color: #00704a;padding: 10px 20px;">SERVICES</h2>
      
      <table id="bpsServicesComparisonTable" style="clear: both;">
      
      <tr>
        <th class="accountRequirements">Account Requirements</th>
        <th class="fidelityTelephoneLinkComparisonInfo">Fidelity Telephone Link</th>
        <th class="mobileMoneyComparisonInfo">Mobile Money</th>
        <th class="onlineBankingComparisonInfo">Online Banking</th>
        <th class="popMoneyComparisonInfo">Pop Money</th>
        <th class="webBillPayComparisonInfo">Web Bill Pay</th>
        <th class="wireTransfersComparisonInfo">Wire Transfers</th>
      </tr>
      
      <tr>
        <td class="accountRequirements">Fees</td>
        <td class="fidelityTelephoneLinkComparisonInfo">Stop Payment Request- Fidelity Telephone Link - $10 per request.</td>
        <td class="mobileMoneyComparisonInfo">None; Cell phone providers may charge additional fees for web access and/ or text messaging.</td>
        <td class="onlineBankingComparisonInfo">None</td>
        <td class="popMoneyComparisonInfo">$0.50 per transaction (Transfers)<br />$0- $249.99 &nbsp;&nbsp;-&nbsp;&nbsp; $0.50 per request (Request Money)<br />$250- $999.99 &nbsp;&nbsp;-&nbsp;&nbsp; $0.75 per request<br />$1,000 and up &nbsp;&nbsp;-&nbsp;&nbsp; $1.50 per request</td>
        <td class="webBillPayComparisonInfo">$10 per month per user for business accounts.<br />Free when at least two (2) bills per month are paid online.</td>
        <td class="wireTransfersComparisonInfo">$15 per request plus related fees (Incoming)<br />$30 per request (Domestic Outgoing)<br />$45 per request plus related fees (Foreign Outgoing)</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Eligibility</td>
        <td class="fidelityTelephoneLinkComparisonInfo">Any customer</td>
        <td class="mobileMoneyComparisonInfo">Any customer enrolled in Online Banking.</td>
        <td class="onlineBankingComparisonInfo">Any customer</td>
        <td class="popMoneyComparisonInfo">Any customer enrolled in Online Banking and Web Bill Pay.</td>
        <td class="webBillPayComparisonInfo">Any customer enrolled in online banking</td>
        <td class="wireTransfersComparisonInfo">Any customer</td>
      </tr>
      
      <tr>
        <td class="accountRequirements">Special Notes</td>
        <td class="fidelityTelephoneLinkComparisonInfo">N/A</td>
        <td class="mobileMoneyComparisonInfo">Mobile Devices Supported - Operating systems including Apple, Android, iOS, Symbian, Windows Mobile, Linux, Palm webOS and Maemo.</td>
        <td class="onlineBankingComparisonInfo">N/A</td>
        <td class="popMoneyComparisonInfo">N/A</td>
        <td class="webBillPayComparisonInfo">N/A</td>
        <td class="wireTransfersComparisonInfo">N/A</td>
      </tr>
      
    </table>
    </div>
    
    <a href="" id="startOver">Start Over</a>
  </div>
  <div id="footer"></div>
  </body>
</html>