local fp = vim.fs.dirname(debug.getinfo(1).source:sub(2))
vim.o.tabstop = 4
vim.o.shiftwidth = 4
vim.api.nvim_create_autocmd("BufWritePost", {
    pattern = { "*.blade.php", ".css", "tailwind.config.js" },
    callback = function()
        if vim.fn.buflisted(vim.api.nvim_get_current_buf()) then
            local f, err = io.popen("npx tailwindcss -i " ..
            fp .. "/resources/css/app.css -o " .. fp .. "/public/css/app.css &> /dev/null &")
            if err or not f then return end
            f:close()
        end
    end
})
