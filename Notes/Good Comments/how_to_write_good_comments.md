# Good practice for comments (17-10-2021)



<!-- ### <strong>This design pattern is used for implementing SOLID principles for OOP. </strong> -->



<!-- > The behaviour is similar or identical to the JavaScript chained methods. -->
<!-- <br> -->


#### Adding a metadata
<br>

```js
/**
 * @description This function generates the button required for Action Bar
 * @author Ashish
 * @param { Function } t => translation function
 * @param { Object } history => contains previous state
 * @param { Function } print => property passed from parent to print
 * @returns { Array } buttons array of Objects
 * @see {@link https://stackoverflow.com/users/5282407/ashish-singh-rawat }
 * @todo Performance optimisation, removing multiple loops
 * * BELOW ARE SOME MORE META DATA, that can be used
 * @argument @async @borrows @class @classdesc @constant
 * @constructor @copyright @default @deprecated @emits
 * @enum @event @example @extends @external @field @file
 * @fileoverview @fires @function @generator @global
 * @hideconstructor @host @ignore @implements @inheritdoc @inner
 * @instance @interface @kind @lends @license @listens @member @memberof
 * @method @mixes @module @name @namespace @override @param @private @property
 * @protected @public @readonly @returns @see @since @static @summary @template
 * @this @throws @tutorial @type @typedef @var @variation @version @virtual
 * @yields
 **/
export const getButtons = (t, history, print) => {
...
}


```
