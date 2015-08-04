
<form role="form" class="form-horizontal">

<table>
    <tr>
        <td valign="top"><table class="table table-model-2 table-hover">
                <tr>
                  <td>排序 ： 
                    <input name="sort" type="text" value="9" /></td>
                </tr>
                <tr>
                    <td>版本 :
                        <input name="v" type="text" value="v" /></td>
                </tr>
                <tr>
                    <td>接口 :<input type="text" name="api" />
                        </td>
                </tr>
                <tr>
                  <td>名称 :
                    <input name="name" type="text" size="50" /></td>
                </tr>
                <tr>
                  <td>调试 :
                    <input name="debug" type="radio" value="0" />
                    关闭
                    <input name="debug" type="radio" value="1" checked="checked"/>
                    开启</td>
                </tr>
                <tr>
                  <td>关闭 :
                    <input name="enable" type="radio" value="1" checked="checked"/>
有效
<input type="radio" name="enable" value="0"/>
无效</td>
                </tr>
                <tr>
                    <td>类型 ： 
                      <br />
                      <input name="type" type="radio" value="GET" checked="checked"/> 
                      GET
<br />
<input type="radio" name="type" value="POST"/> 
POST
<br />
<input type="radio" name="type" value="PUT"/> 
PUT
<br />
<input type="radio" name="type" value="DELETE"/> 
DELETE
<br />
<input type="radio" name="type" value="OTHER"/> 
OTHER</td>
                </tr>
            </table></td>
        <td><table class="table table-hover table-condensed" >
                <tr>
                    <td>模拟提交<br />
                      <textarea class="request" name="request" cols="60" rows="6"></textarea></td>
                </tr>
                <tr>
                    <td>模拟回复<br />
                      <textarea class="response" name="response" cols="60" rows="6"></textarea></td>
                </tr>
                <tr>
                    <td>说明<br />
          <textarea class="dis" name="dis" cols="60" rows="6">模块 :
说明 :
参数 :
成功 :
失败 :</textarea></td>
                </tr>
            </table></td>
    </tr>
</table>
</form>