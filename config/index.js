var fs = require('fs');

var google = JSON.parse(fs.readFileSync('tech.json'));
console.log(google.feed.entry.map(x => {
    return {
        email: x['gd$email'].map(y => y.address).join(','),
        name: x.title.$t
    }
}));
