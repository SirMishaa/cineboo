/*
 * Copyright © 2024 Cineboo (https://github.com/SirMishaa/cineboo)
 *
 * This file is part of Cineboo, a versatile TV series tracking and recommendation application.
 *
 * Cineboo is licensed under the Creative Commons Attribution-NonCommercial-ShareAlike 4.0
 * International License. You may not use this file except in compliance with the License.
 * To view a copy of the License, visit https://creativecommons.org/licenses/by-nc-sa/4.0/.
 *
 * You are free to:
 * - Share: copy and redistribute the material in any medium or format.
 * - Adapt: remix, transform, and build upon the material.
 *
 * Under the following terms:
 * - Attribution: Give appropriate credit, provide a link to the license, and indicate if changes were made.
 * - NonCommercial: Do not use the material for commercial purposes.
 * - ShareAlike: Distribute your contributions under the same license.
 *
 * This notice must be included in all copies or substantial portions of the file.
 *
 */

function i({state:a,splitKeys:n}){return{newTag:"",state:a,createTag:function(){if(this.newTag=this.newTag.trim(),this.newTag!==""){if(this.state.includes(this.newTag)){this.newTag="";return}this.state.push(this.newTag),this.newTag=""}},deleteTag:function(t){this.state=this.state.filter(e=>e!==t)},reorderTags:function(t){let e=this.state.splice(t.oldIndex,1)[0];this.state.splice(t.newIndex,0,e),this.state=[...this.state]},input:{["x-on:blur"]:"createTag()",["x-model"]:"newTag",["x-on:keydown"](t){["Enter",...n].includes(t.key)&&(t.preventDefault(),t.stopPropagation(),this.createTag())},["x-on:paste"](){this.$nextTick(()=>{if(n.length===0){this.createTag();return}let t=n.map(e=>e.replace(/[/\-\\^$*+?.()|[\]{}]/g,"\\$&")).join("|");this.newTag.split(new RegExp(t,"g")).forEach(e=>{this.newTag=e,this.createTag()})})}}}}export{i as default};
