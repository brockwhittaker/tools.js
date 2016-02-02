#tools.js
This is my personal set of tools to cover all my jQuery needs without the jQuery size.

##Features & Prototypes

A list of methods accessible to selections are:

1. **addClass:** add class to one element
2. **append:** append a HTML Element to parent
3. **attr:** get/set attribute
4. **children:** get children with attribute
5. **css:** get/set CSS properties
6. **each:** iterate through element selection
7. **el:** filter selected elements by index or with callback
8. **html:** get/set innerHTML
9. **on:** add event listeners
10. **parent:** get parent of one element
11. **remove:** remove one element
12. **removeClass:** remove class from one element
13. **text:** get/set innerText
14. **val:** get/set value of one element

A list of core functions available are:

1. **ajax:** send an ajax request
2. **create:** create an HTML element with JSON
3. **get:** specific GET request using internal ajax function
6. **quant (object):** library of quantitative financial functions
6. **finance (object):** library of financial functions

A list of financial functions available are:

1. **assetReturn:** get asset return given present and past value.
2. **futureValue:** get future value of an asset at interest rate.
3. **mortgagePayment:** calculate expected mortgage/loan payment.
3. **sharpeRatio:** return comparable risk ratio of an asset.
3. **capm:** return Capital Asset Pricing Model (CAPM) of an asset.
3. **expectedValue:** return the expected value of events.

A list of quant functions available are:

1. **sum:** sum of array
2. **mean:** mean of array
3. **variance:** variance of array
4. **last:** last index of array
5. **standardDeviation:** standard deviation of array
6. **kurtosis:** kurtosis of array
7. **skewness:** skewness of array
8. **movingSample:** generic callback for array slicing and continuous functions
9. **productSample:** generic callback for continuous product functions
10. **bollingerBands:** bollinger bands over time in array
11. **simpleMovingAverage:** simple moving average over time in array
12. **rollingVolatility:** volatility over time in array
13. **rollingSkewness:** skewness over time in array
14. **rollingKurtosis:** kurtosis over time in array
15. **residuals:** array to residuals
16. **gaussian:** returns a random number in distribution N(0, 1)
17. **normalDist:** returns a random number in distribution N(mean, standardDeviation)


##Use

The element selectors in the first list can be used similarly to jQuery:

```javascript
_("p").each(function () {
  /* iterate through all <p> tags. */

  _(this).addClass("red");
  /* to each, add the class "red". */
});
```

Core functions like `ajax` can be referenced and used like such:

```javascript
_.ajax({
  type : "GET",
  url : "http://www.lavancier.com/",
  data : null,
  callback : function (response, error) {
    console.log(response, error);
  },
  dataType : "text"
});
```

Quant functions like `bollingerBands` can be referenced as such:

```javascript
var bollBands = _.quant.bollingerBands([1.01,1.04,1.03,1.06,1.07,1.09,1.08,1.09,1.07,1.10,1.09], 5, 1);
```

##Documentation

The code is all heavily documented internally, so check out the source finance.js for information on each internal function.
