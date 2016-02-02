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
4. product
5. sum
6. quant (object)

A list of quant function available are:

1. sum
2. mean
3. variance
4. last
5. standardDeviation
6. kurtosis
7. skewness
8. movingSample
9. productSample
10. bollingerBands
11. simpleMovingAverage
12. rollingVolatility
13. rollingSkewness
14. rollingKurtosis
15. residuals
16. gaussian


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
