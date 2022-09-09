<template>
    <div class="form-group">
        <label :for="id" class="form-label">{{ titulo }}</label>
        <slot></slot>
        <div :id="idlHelp" class="form-text text-muted">{{ textAjuda }}</div>
    </div>
</template>

<script>
export default {
    props:['id', 'titulo', 'idHelp ', 'textAjuda']
}
</script>
