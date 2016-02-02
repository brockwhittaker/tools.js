#tools.js
This is my personal set of tools to cover all my jQuery needs without the jQuery size.

##Features & Prototypes

A list of methods accessible to selections are:

1. addClass
2. append
3. attr
4. children
5. css
6. each
7. el
8. html
9. on
10. parent
11. remove
12. removeClass
13. text
14. val

A list of core functions available are:

1. ajax
2. create
3. get
6. quant (object)

A list of quant function available are:

1. sum: sum of array
2. mean: mean of array
3. variance: variance of array
4. last: last index of array
5. standardDeviation: standard deviation of array
6. kurtosis: kurtosis of array
7. skewness: skewness of array
8. movingSample: generic callback for array slicing and continuous functions
9. productSample: generic callback for continuous product functions
10. bollingerBands: bollinger bands over time in array
11. simpleMovingAverage: simple moving average over time in array
12. rollingVolatility: volatility over time in array
13. rollingSkewness: skewness over time in array
14. rollingKurtosis: kurtosis over time in array
15. residuals: array to residuals
16. gaussian: returns a random number in distribution N(0, 1)
17. normalDist: returns a random number in distribution N(mean, standardDeviation)


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
  }
  dataType : "text"
});
```

Quant functions like `bollingerBands` can be referenced as such:

```javascript
var bollBands = _.quant.bollingerBands([1.01,1.04,1.03,1.06,1.07,1.09,1.08,1.09,1.07,1.10,1.09], 5, 1);
```

##Documentation

The code is all heavily documented internally, so check out the source finance.js for information on each internal function.
