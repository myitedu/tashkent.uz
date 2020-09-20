<div class="comments">
    <form method="post" action="/post_comment">
        <p>Your Comments</p>
        <p>
            <textarea name="your_comment" placeholder="Your message goes here"></textarea>
        </p>
        <p>
            {{csrf_field()}}
            <button class="btn btn-dark" type="reset">Reset</button>
            <button class="btn btn-success" type="submit">Post Comment</button>
        </p>
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
