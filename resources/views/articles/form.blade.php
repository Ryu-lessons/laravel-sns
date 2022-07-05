@csrf
<div class="md-form">
    <label>タイトル</label>
    <input class="form-control" type="text" name="title" required value="{{old('title')}}">
</div>
<div class="form-group">
    <label></label>
    <textarea name="body" required rows="16" class="form-control" placeholder="本文">{{old('body')}}</textarea>
</div>
