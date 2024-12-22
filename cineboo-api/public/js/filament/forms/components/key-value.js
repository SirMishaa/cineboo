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

function r({state:o}){return{state:o,rows:[],shouldUpdateRows:!0,init:function(){this.updateRows(),this.rows.length<=0?this.rows.push({key:"",value:""}):this.updateState(),this.$watch("state",(t,e)=>{let s=i=>i===null?0:Array.isArray(i)?i.length:typeof i!="object"?0:Object.keys(i).length;s(t)===0&&s(e)===0||this.updateRows()})},addRow:function(){this.rows.push({key:"",value:""}),this.updateState()},deleteRow:function(t){this.rows.splice(t,1),this.rows.length<=0&&this.addRow(),this.updateState()},reorderRows:function(t){let e=Alpine.raw(this.rows);this.rows=[];let s=e.splice(t.oldIndex,1)[0];e.splice(t.newIndex,0,s),this.$nextTick(()=>{this.rows=e,this.updateState()})},updateRows:function(){if(!this.shouldUpdateRows){this.shouldUpdateRows=!0;return}let t=[];for(let[e,s]of Object.entries(this.state??{}))t.push({key:e,value:s});this.rows=t},updateState:function(){let t={};this.rows.forEach(e=>{e.key===""||e.key===null||(t[e.key]=e.value)}),this.shouldUpdateRows=!1,this.state=t}}}export{r as default};
