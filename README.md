Tax protest flowchart
======================

An interactive about how tax protests work based on the singe-page project repo.

It was last updated April 26, 2017.

You can email Marya Crigler <MCrigler@tcadcentral.org> to request updates. 

This is the email I sent in 2018 (which will need to be updated):

```
Hiya Marya,
 
We’re hoping to update our property tax protest guide with 2017 data and 2018 dates.
 
Current:
http://projects.statesman.com/news/tax-protest-flowchart/
 
Do you know if any of these need updating for 2018?
- Property evaluations: Late April/early May
- Notice of protest date: May 31
- Information meetings: June
- August: arbitration deadline
 
There are also several number values we could update from 2017 data:
- Number of notices mailed out
- Number of protests initiated
- Percent of homeowners who hired an agent
- Median amount of valuation reduced through protest
- Average amount of valuation reduced through protest
- Amount of valuation reduced from total tax rolls through protests
- Amount of valuation reduced from residential protests
 
Thanks, much.
```

### project specifics

It is published on CMG [the host server](http://projects.statesman.com/news/tax-protest-flowchart/). Publishing is configured in the Gruntfile.

* use `bower.json` and `bower install`
* use a public folder for the published files:
	* assets: images and other accces
	* dist: where js and css is compiled
	* fonts: for font-awesome
	* includes: files for metrics, advertising and other includes
* use a src for build components
	* js: for project specific files
	* less: for less css source files.
* use ftpush grunt task to publish public.
	* The path is in `Gruntfile.js`. Add the username/password into a file called .ftppass as per [ftpush docs](https://www.npmjs.com/package/grunt-ftpush). Make sure that file is in the .gitignore.
* will also need our `.slack` key for Grunt notifications.
