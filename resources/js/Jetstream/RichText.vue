<template>
    <div>
        <el-tiptap
            v-model="content"
            :extensions="extensions"
        />
    </div>
</template>

<script>
import {
    // necessary extensions
    Doc,
    Text,
    Paragraph,
    Heading,
    Bold,
    Underline,
    Italic,
    Strike,
    ListItem,
    BulletList,
    OrderedList,
} from 'element-tiptap';

export default {
    data () {
        return {
            extensions: [
                new Doc(),
                new Text(),
                new Paragraph(),
                new Heading({ level: 5 }),
                new Bold({ bubble: true }), // render command-button in bubble menu.
                new Underline({ bubble: true, menubar: false }), // render command-button in bubble menu but not in menubar.
                new Italic(),
                new Strike(),
                new ListItem(),
                new BulletList(),
                new OrderedList(),
            ],
            content: '',
        };
    },
    watch: {
        content() {
            this.$emit('change', this.content)
        }
    }
}
</script>

