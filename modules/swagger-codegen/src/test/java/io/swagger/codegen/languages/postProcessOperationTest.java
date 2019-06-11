package io.swagger.codegen.languages;

import io.swagger.codegen.CodegenOperation;
import org.testng.annotations.Test;

import java.util.ArrayList;
import java.util.List;

import static org.testng.Assert.*;

public class postProcessOperationTest {

    @Test
    public void testPostProcessOperation() {
        final CodegenOperation codegenOperation = new CodegenOperation();
        List<CodegenOperation> list = new ArrayList<>();
        List<CodegenOperation> expectedList = new ArrayList<CodegenOperation>() {{
            add(codegenOperation);
        }};

        assertEquals(PostProcessOperation.postProcessOperation(list, codegenOperation), expectedList);
    }
}