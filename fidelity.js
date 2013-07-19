var comparisonList = new Array();
var maxCompare = 3;

$(document).ready(function(){
 
    $("#ppsCategories").hide();
    $("#ppsOptionsChecking").hide();
    $("#ppsOptionsSavings").hide();
    $("#ppsOptionsLoans").hide();
    $("#ppsOptionsServices").hide();
    $("#ppsCheckingComparison").hide();
    $("#ppsLoansComparison").hide();
    $("#ppsSavingsComparison").hide();
    $("#ppsServicesComparison").hide();
    
    $("#bpsCategories").hide();
    $("#bpsOptionsChecking").hide();
    $("#bpsOptionsSavings").hide();
    $("#bpsOptionsServices").hide();
    $("#bpsOptionsSolutions").hide();
    $("#bpsCheckingComparison").hide();
    $("#bpsSavingsComparison").hide();
    $("#bpsServicesComparison").hide();
    
    // Three Main Menu Buttons
    $('#ppsButton').click(function(){
      $("#mainMenu").fadeOut();
      $("#ppsCategories").fadeIn();
      $("#bpsCategories").fadeOut();
      $("#tsCategories").fadeOut();
    });
    $('#bpsButton').click(function(){
      $("#mainMenu").fadeOut();
      $("#bpsCategories").fadeIn();
      $("#tsCategories").fadeOut();
      $("#ppsCategories").fadeOut();
    });
    $('#tsButton').click(function(){
      $("#mainMenu").fadeOut();
      $("#tsCategories").fadeIn();
      $("#bpsCategories").fadeOut();
      $("#ppsCategories").fadeOut();
    });
    
    // Step 2 Buttons for Personal Products and Services
    $('#ppsCheckingCategoryButton').click(function(){
      $("#ppsCategories").fadeOut();
      $("#ppsOptionsChecking").fadeIn();
    });
    
    $('#ppsSavingsCategoryButton').click(function(){
      $("#ppsCategories").fadeOut();
      $("#ppsOptionsSavings").fadeIn();
    });
    
    $('#ppsLoansCategoryButton').click(function(){
      $("#ppsCategories").fadeOut();
      $("#ppsOptionsLoans").fadeIn();
    });
    
    $('#ppsServicesCategoryButton').click(function(){
      $("#ppsCategories").fadeOut();
      $("#ppsOptionsServices").fadeIn();
    });
    
    $('#bpsCheckingCategoryButton').click(function(){
      $("#bpsCategories").fadeOut();
      $("#bpsOptionsChecking").fadeIn();
    });
    
    $('#bpsSavingsCategoryButton').click(function(){
      $("#bpsCategories").fadeOut();
      $("#bpsOptionsSavings").fadeIn();
    });
    
    $('#bpsServicesCategoryButton').click(function(){
      $("#bpsCategories").fadeOut();
      $("#bpsOptionsServices").fadeIn();
    });
    
    $('#bpsSolutionsCategoryButton').click(function(){
      $("#bpsCategories").fadeOut();
      $("#bpsOptionsSolutions").fadeIn();
    });
    
    // Step 3 Compare Button for Personal Products and Services
    $('#ppsCheckingCompareButton').click(function(){
      $("#ppsOptionsChecking").fadeOut();
      $("#ppsCheckingComparison").fadeIn();
    });
    
    $('#ppsSavingsCompareButton').click(function(){
      $("#ppsOptionsSavings").fadeOut();
      $("#ppsSavingsComparison").fadeIn();
    });
    
    $('#ppsLoansCompareButton').click(function(){
      $("#ppsOptionsLoans").fadeOut();
      $("#ppsLoansComparison").fadeIn();
    });
    
    $('#ppsServicesCompareButton').click(function(){
      $("#ppsOptionsServices").fadeOut();
      $("#ppsServicesComparison").fadeIn();
    });
    
    $('#bpsCheckingCompareButton').click(function(){
      $("#bpsOptionsChecking").fadeOut();
      $("#bpsCheckingComparison").fadeIn();
    });
    
    $('#bpsSavingsCompareButton').click(function(){
      $("#bpsOptionsSavings").fadeOut();
      $("#bpsSavingsComparison").fadeIn();
    });
    
    $('#bpsServicesCompareButton').click(function(){
      $("#bpsOptionsServices").fadeOut();
      $("#bpsServicesComparison").fadeIn();
    });
    
    // Handle what occurs when a checkbox is clicked on
    $('.ppsCheckingCheckBox').click(function(){
      if(!$(this).is('.chosen')){
           if (comparisonList.length < maxCompare){
             $(this).css('background-image', 'url(circle-bullet-point-filled.png)').addClass('chosen');
             comparisonList.push($(this).attr("id"));
             if ($(this).attr('id') == $('#freeCheckingOption').attr('id')){
               $('.freeCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#greenChoiceCheckingOption').attr('id')){
               $('.greenChoiceCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#freeSeniorCheckingOption').attr('id')){
               $('.freeSeniorCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#freeStudentCheckingOption').attr('id')){
               $('.freeStudentCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#classicChoiceCheckingOption').attr('id')){
               $('.classicChoiceCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#fidelityChoiceCheckingOption').attr('id')){
               $('.fidelityChoiceCheckingComparisonInfo').show();
             }
           }
           else{
            alert('You\'ve reached the maximum number of options to compare. Please unselect an option.');
           }
        }else {
           $(this).css('background-image', 'url(circle-bullet-point.png)').removeClass('chosen');
           comparisonList.pop();
           if ($(this).attr('id') == $('#freeCheckingOption').attr('id')){
              $('.freeCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#greenChoiceCheckingOption').attr('id')){
              $('.greenChoiceCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#freeSeniorCheckingOption').attr('id')){
              $('.freeSeniorCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#freeStudentCheckingOption').attr('id')){
              $('.freeStudentCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#classicChoiceCheckingOption').attr('id')){
              $('.classicChoiceCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#fidelityChoiceCheckingOption').attr('id')){
              $('.fidelityChoiceCheckingComparisonInfo').hide();
            }
        }
    });
 
     $('.ppsSavingsCheckBox').click(function(){
     if(!$(this).is('.chosen')){
           if (comparisonList.length < maxCompare){
             $(this).css('background-image', 'url(circle-bullet-point-filled.png)').addClass('chosen');
             comparisonList.push($(this).attr("id"));
             if ($(this).attr('id') == $('#statementSavingsOption').attr('id')){
               $('.statementSavingsComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#optimumChoiceSavingsOption').attr('id')){
               $('.optimumChoiceSavingsComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#choicePerformanceSavingsOption').attr('id')){
               $('.choicePerformanceSavingsComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#christmasClubOption').attr('id')){
               $('.christmasClubComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#allPurposeClubOption').attr('id')){
               $('.allPurposeClubComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#greenTeamSavingsOption').attr('id')){
               $('.greenTeamSavingsComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#scholarSavingsOption').attr('id')){
               $('.scholarSavingsComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#moneyMarketOption').attr('id')){
               $('.moneyMarketComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#choiceMoneyMarketOption').attr('id')){
               $('.choiceMoneyMarketComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#advantageMoneyMarketOption').attr('id')){
               $('.advantageMoneyMarketComparisonInfo').show();
             }
           }
           else{
            alert('You\'ve reached the maximum number of options to compare. Please unselect an option.');
           }
        }else {
           $(this).css('background-image', 'url(circle-bullet-point.png)').removeClass('chosen');
           comparisonList.pop();
           if ($(this).attr('id') == $('#statementSavingsOption').attr('id')){
              $('.statementSavingsComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#optimumChoiceSavingsOption').attr('id')){
              $('.optimumChoiceSavingsComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#choicePerformanceSavingsOption').attr('id')){
              $('.choicePerformanceSavingsComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#christmasClubOption').attr('id')){
              $('.christmasClubComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#allPurposeClubOption').attr('id')){
              $('.allPurposeClubComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#greenTeamSavingsOption').attr('id')){
              $('.greenTeamSavingsComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#scholarSavingsOption').attr('id')){
              $('.scholarSavingsComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#moneyMarketOption').attr('id')){
              $('.moneyMarketComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#choiceMoneyMarketOption').attr('id')){
              $('.choiceMoneyMarketComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#advantageMoneyMarketOption').attr('id')){
              $('.advantageMoneyMarketComparisonInfo').hide();
            }
        }
    });
 
    $('.ppsLoansCheckBox').click(function(){
       if(!$(this).is('.chosen')){
           if (comparisonList.length < maxCompare){
             $(this).css('background-image', 'url(circle-bullet-point-filled.png)').addClass('chosen');
             comparisonList.push($(this).attr("id"));
             if ($(this).attr('id') == $('#autoLoansLoanOption').attr('id')){
               $('.autoLoansLoanOptionComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#homeEquityLoansLoanOption').attr('id')){
               $('.homeEquityLoansLoanOptionComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#linesOfCreditLoanOption').attr('id')){
               $('.linesOfCreditLoanOptionComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#mortgageLoansLoanOption').attr('id')){
               $('.mortgageLoansLoanOptionComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#personalLoansLoanOption').attr('id')){
               $('.personalLoansLoanOptionComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#studentLoansLoanOption').attr('id')){
               $('.studentLoansLoanOptionComparisonInfo').show();
             }
           }
           else{
            alert('You\'ve reached the maximum number of options to compare. Please unselect an option.');
           }
        }else {
           $(this).css('background-image', 'url(circle-bullet-point.png)').removeClass('chosen');
           comparisonList.pop();
           if ($(this).attr('id') == $('#autoLoansLoanOption').attr('id')){
              $('.autoLoansLoanOptionComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#homeEquityLoansLoanOption').attr('id')){
              $('.homeEquityLoansLoanOptionComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#linesOfCreditLoanOption').attr('id')){
              $('.linesOfCreditLoanOptionComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#mortgageLoansLoanOption').attr('id')){
              $('.mortgageLoansLoanOptionComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#personalLoansLoanOption').attr('id')){
              $('.personalLoansLoanOptionComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#studentLoansLoanOption').attr('id')){
              $('.studentLoansLoanOptionComparisonInfo').hide();
            }
        }
    });
 
     $('.ppsServicesCheckBox').click(function(){
       if(!$(this).is('.chosen')){
           if (comparisonList.length < maxCompare){
             $(this).css('background-image', 'url(circle-bullet-point-filled.png)').addClass('chosen');
             comparisonList.push($(this).attr("id"));
             if ($(this).attr('id') == $('#webBillPayOption').attr('id')){
               $('.webBillPayComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#ezStatementOption').attr('id')){
               $('.ezStatementComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#fidelityTelephoneLinkOption').attr('id')){
               $('.fidelityTelephoneLinkComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#fidelityVisaCheckCardOption').attr('id')){
               $('.fidelityVisaCheckCardComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#popMoneyOption').attr('id')){
               $('.popMoneyComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#mobileMoneyOption').attr('id')){
               $('.mobileMoneyComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#onlineBankingOption').attr('id')){
               $('.onlineBankingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#overdraftProtectionOption').attr('id')){
               $('.overdraftProtectionComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#wireTransfersOption').attr('id')){
               $('.wireTransfersComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#moneyOrdersOption').attr('id')){
               $('.moneyOrdersComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#cashiersChecksOption').attr('id')){
               $('.cashiersChecksComparisonInfo').show();
             }
           }
           else{
            alert('You\'ve reached the maximum number of options to compare. Please unselect an option.');
           }
        }else {
           $(this).css('background-image', 'url(circle-bullet-point.png)').removeClass('chosen');
           comparisonList.pop();
           if ($(this).attr('id') == $('#businessAnalysisCheckingOption').attr('id')){
              $('.businessAnalysisCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#businessInterestCheckingOption').attr('id')){
              $('.businessInterestCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#communityFirstNonProfitCheckingOption').attr('id')){
              $('.communityFirstNonProfitCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#freeBusinessCheckingOption').attr('id')){
              $('.freeBusinessCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#IOLTACheckingOption').attr('id')){
              $('.IOLTACheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#fidelityMuniChoiceCheckingOption').attr('id')){
              $('.fidelityMuniChoiceCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#popMoneyOption').attr('id')){
              $('.popMoneyComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#mobileMoneyOption').attr('id')){
              $('.mobileMoneyComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#onlineBankingOption').attr('id')){
              $('.onlineBankingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#overdraftProtectionOption').attr('id')){
              $('.overdraftProtectionComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#wireTransfersOption').attr('id')){
              $('.wireTransfersComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#moneyOrdersOption').attr('id')){
              $('.moneyOrdersComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#cashiersChecksOption').attr('id')){
              $('.cashiersChecksComparisonInfo').hide();
            }
        }
    });
 
     $('.bpsCheckingCheckBox').click(function(){
      if(!$(this).is('.chosen')){
           if (comparisonList.length < maxCompare){
             $(this).css('background-image', 'url(circle-bullet-point-filled.png)').addClass('chosen');
             comparisonList.push($(this).attr("id"));
             if ($(this).attr('id') == $('#businessAnalysisCheckingOption').attr('id')){
               $('.businessAnalysisCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#businessInterestCheckingOption').attr('id')){
               $('.businessInterestCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#communityFirstNonProfitCheckingOption').attr('id')){
               $('.communityFirstNonProfitCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#freeBusinessCheckingOption').attr('id')){
               $('.freeBusinessCheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#IOLTACheckingOption').attr('id')){
               $('.IOLTACheckingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#fidelityMuniChoiceCheckingOption').attr('id')){
               $('.fidelityMuniChoiceCheckingComparisonInfo').show();
             }
           }
           else{
            alert('You\'ve reached the maximum number of options to compare. Please unselect an option.');
           }
        }else {
           $(this).css('background-image', 'url(circle-bullet-point.png)').removeClass('chosen');
           comparisonList.pop();
           if ($(this).attr('id') == $('#businessAnalysisCheckingOption').attr('id')){
              $('.businessAnalysisCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#businessInterestCheckingOption').attr('id')){
              $('.businessInterestCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#communityFirstNonProfitCheckingOption').attr('id')){
              $('.communityFirstNonProfitCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#freeBusinessCheckingOption').attr('id')){
              $('.freeBusinessCheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#IOLTACheckingOption').attr('id')){
              $('.IOLTACheckingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#fidelityMuniChoiceCheckingOption').attr('id')){
              $('.fidelityMuniChoiceCheckingComparisonInfo').hide();
            }
        }
    });
 
    $('.bpsSavingsCheckBox').click(function(){
      if(!$(this).is('.chosen')){
           if (comparisonList.length < maxCompare){
             $(this).css('background-image', 'url(circle-bullet-point-filled.png)').addClass('chosen');
             comparisonList.push($(this).attr("id"));
             if ($(this).attr('id') == $('#businessSavingsOption').attr('id')){
               $('.businessSavingsAccountComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#optimumChoiceSavingsOption').attr('id')){
               $('.optimumChoiceSavingsComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#advantageMoneyMarketOption').attr('id')){
               $('.advantageMoneyMarketComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#businessMoneyMarketOption').attr('id')){
               $('.businessMoneyMarketComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#certificatesOfDepositOption').attr('id')){
               $('.certificatesOfDepositComparisonInfo').show();
             }
           }
           else{
            alert('You\'ve reached the maximum number of options to compare. Please unselect an option.');
           }
        }else {
           $(this).css('background-image', 'url(circle-bullet-point.png)').removeClass('chosen');
           comparisonList.pop();
           if ($(this).attr('id') == $('#businessSavingsOption').attr('id')){
              $('.businessSavingsAccountComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#optimumChoiceSavingsOption').attr('id')){
              $('.optimumChoiceSavingsComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#advantageMoneyMarketOption').attr('id')){
              $('.advantageMoneyMarketComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#businessMoneyMarketOption').attr('id')){
              $('.businessMoneyMarketComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#certificatesOfDepositOption').attr('id')){
              $('.certificatesOfDepositComparisonInfo').hide();
            }
        }
    });
 
     $('.bpsServicesCheckBox').click(function(){
      if(!$(this).is('.chosen')){
           if (comparisonList.length < maxCompare){
             $(this).css('background-image', 'url(circle-bullet-point-filled.png)').addClass('chosen');
             comparisonList.push($(this).attr("id"));
             if ($(this).attr('id') == $('#webBillPayOption').attr('id')){
               $('.webBillPayComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#fidelityTelephoneLinkOption').attr('id')){
               $('.fidelityTelephoneLinkComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#popMoneyOption').attr('id')){
               $('.popMoneyComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#mobileMoneyOption').attr('id')){
               $('.mobileMoneyComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#onlineBankingOption').attr('id')){
               $('.onlineBankingComparisonInfo').show();
             }
             else if ($(this).attr('id') == $('#wireTransfersOption').attr('id')){
               $('.wireTransfersComparisonInfo').show();
             }
           }
           else{
            alert('You\'ve reached the maximum number of options to compare. Please unselect an option.');
           }
        }else {
           $(this).css('background-image', 'url(circle-bullet-point.png)').removeClass('chosen');
           comparisonList.pop();
           if ($(this).attr('id') == $('#webBillPayOption').attr('id')){
              $('.webBillPayComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#fidelityTelephoneLinkOption').attr('id')){
              $('.fidelityTelephoneLinkComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#popMoneyOption').attr('id')){
              $('.popMoneyComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#mobileMoneyOption').attr('id')){
              $('.mobileMoneyComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#onlineBankingOption').attr('id')){
              $('.onlineBankingComparisonInfo').hide();
            }
            else if ($(this).attr('id') == $('#wireTransfersOption').attr('id')){
              $('.wireTransfersComparisonInfo').hide();
            }
        }
    });
 
  $('#startOver').click(function(){
     $("#ppsCategories").hide();
     $("#ppsOptions").hide();
     $("#ppsCheckingComparison").hide();
     $("#ppsLoansComparison").hide();
     $("#ppsSavingsComparison").hide();
     $("#ppsServicesComparison").hide();
    
     $("#bpsCategories").hide();
     $("#bpsOptions").hide();
     $("#bpsCheckingComparison").hide();
     $("#bpsServicesComparison").hide();
     $("#mainMenu").fadeIn();
  });
});