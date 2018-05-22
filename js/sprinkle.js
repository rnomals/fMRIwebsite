var a = [
    'a', 'aa', 'aaa', 'aaaa', 'aaaaa',
    'b', 'bb', 'bbb', 'bbbb', 'bbbbb',
    'c', 'cc', 'ccc', 'cccc', 'ccccc'
];

var b = [
    'Z', 'ZZ', 'ZZZ'
];

function randomInt(min, max) { 
    return min + Math.floor((max - min) * Math.random());
}

function sprinkle(a, b) {
    // clone arrays
    a = a && a.slice() || [];
    b = b && b.slice() || [];

    if (!a.length) {
        return b;
    }

    if (!b.length) {
        return a;
    }

    var chunk;
    var shortArr = a.length <= b.length ? a : b;
    var longArr = a.length <= b.length ? b : a;
    var interval = Math.ceil(longArr.length / shortArr.length);
    var retval = [];

    while (longArr.length) {
        // pop() multiple
        chunk = longArr.splice(-interval);

        if (shortArr.length) {
            // inject a short item into a range of long items
            chunk.splice(randomInt(0, chunk.length), 0, shortArr.pop());
        }

        // add result to return value
        retval.unshift.apply(retval, chunk);
    }

    return retval;
}

console.log(sprinkle(a, b));